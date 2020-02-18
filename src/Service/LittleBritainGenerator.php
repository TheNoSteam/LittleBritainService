<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class LittleBritainGenerator {

    private $logger;

    private $comedian;

    public function __construct(LoggerInterface $logger, $comedian) {
        $this->logger = $logger;
        $this->comedian = $comedian;
    }

    public function quotesGenerator() {
        $this->logger->info("Your chosen comedian is $this->comedian. To set your comedian change the variable in your config.yaml");

        switch($this->comedian) {
            case 'Andy':
                $messages = ['Yeah, I know.', 'I don\'t like it!', 'I want that one!' ];
                break;
            case 'Lou':
                $messages = ['What a kerfuffle!'];
                break;
            case 'Carol Beer':
                $messages = ['Computer says no. (*coughs*)'];
                break;
            case 'Marjorie Dawes':
                $messages = ['Dust... anybody? No?', 'Hello Fatties!', 'I JUST LOVE CAKE!'];
                break;
            case 'Vicky Pollard':
                $messages = ['No but, yeah but...', 'Oh my god, I just SO can\'t believe you just said that!',
                            'Shut up!'];
                break;
            case 'Emily Howard':
                $messages = ['I\'m a lady!', 'I do ladies things!'];
                break;
            case 'Bubbles DeVere':
                $messages = ['I don\'t know what to suggest! Margaret will know. Margaret! Margaret!', 'Oh, sorry Margaret, I forgot!'];
                break;
            default:
                $messages = ['Choose one of this comedians: Andy, Lou, Carol Beer, Marjorie Daws, Vicky Pollard, Emily Howard, Bubbles DeVere'];
                break;
        }

        $index = array_rand($messages);

        return [$this->comedian, $messages[$index]];
    }
}