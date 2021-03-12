<?php 

namespace App\Model;

class SkillsModel
{
    private $skills = [
        0 => [
            'name' => 'HTML',
            'image' => 'html.png',
        ],

        [
            'name' => 'CSS',
            'image' => 'css.jpg',
        ],

        [
            'name' => 'PHP',
            'image' => 'php.jpg',
        ],

        [
            'name' => 'Bootstrap',
            'image' => 'bootstrap.jpg',
        ],

        [
            'name' => 'Symfony',
            'image' => 'Symfony.jpg',
        ],

        [
            'name' => 'Doctrine',
            'image' => 'doctrine.png',
        ],

        [
            'name' => 'Twig',
            'image' => 'twig.png',
        ],

        [
            'name' => 'MySQL',
            'image' => 'mysql.png',
        ],

        [
            'name' => 'Visual Studio Code',
            'image' => 'vscode.png',
        ],

        [
            'name' => 'GitHub',
            'image' => 'github.png',
        ],

        [
            'name' => 'Windows',
            'image' => 'windows.png',
        ],

        [
            'name' => 'Linux',
            'image' => 'linux.jpg',
        ],

        [
            'name' => 'Méthode Scrum',
            'image' => 'scrum.png',
        ],

        [
            'name' => 'Slack',
            'image' => 'slack.png',
        ],

        [
            'name' => 'Discord',
            'image' => 'discord.png',
        ],
    ];


    public function getAll() :array
    {
        return $this->skills;
    }
}