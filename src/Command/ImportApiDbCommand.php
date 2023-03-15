<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Config\Framework\HttpClientConfig;
use Symfony\Contracts\HttpClient\HttpClientInterface;

use App\Entity\Cat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[AsCommand(
    name: 'import:api:db',
    description: 'Import API into DB',
)]
class ImportApiDbCommand extends Command
{

    private $client;
    private $em;

    public function __construct(HttpClientInterface $client, EntityManagerInterface $em)
    {
        $this->client = $client->withOptions([
            'headers' => ['X-Api-Key' => 'u+/FSkrEZfHvQ7zYoru5nw==ri6ZAziFqt3TcDck']
        ]);
        $this->em = $em;

        parent:: __construct();
    }

    public function fetchApiData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.api-ninjas.com/v1/cats?name=a'
        );

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]

        return $content;
    }

    public function setDataFromApi($content)
    {
        foreach($content as $catData) {

            $cat = new Cat();

            $cat->setLength($catData['length']);
            $cat->setOrigin($catData['origin']);
            $cat->setImageLink($catData['image_link']);
            $cat->setFamilyFriendly($catData['family_friendly']);
            $cat->setShedding($catData['shedding']);
            $cat->setGeneralHealth($catData['general_health']);
            $cat->setPlayfulness($catData['playfulness']);
            if (isset($catData['meowing'])) {
                $cat->setMeowing($catData['meowing']);
            }
            if (isset($catData['stranger_friendly'])) {
                $cat->setStrangerFriendly($catData['stranger_friendly']);
            }
            $cat->setGrooming($catData['grooming']);
            if (isset($catData['intelligence'])) {
                $cat->setIntelligence($catData['intelligence']);
            }
            $cat->setMinWeight($catData['min_weight']);
            $cat->setMaxWeight($catData['max_weight']);
            $cat->setMinLifeExpectancy($catData['min_life_expectancy']);
            $cat->setMaxLifeExpectancy($catData['max_life_expectancy']);
            $cat->setName($catData['name']);

            $this->em->persist($cat);
        }
        
        $this->em->flush();
    }


    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->setDataFromApi($this->fetchApiData());
        return Command::SUCCESS;
    }
}
