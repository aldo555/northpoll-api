<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use function PHPSTORM_META\map;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Str::macro('idToPrettyUrl', function($id) {
          $dictionary = [
            'chad',
            'cherry',
            'sweetheart',
            'slick',
            'champ',
            'sport',
            'pal',
            'rookie',
            'boss',
            'chief',
            'buddy',
            'bud',
            'bub',
            'nickelback',
            'honey',
            'cupcake',
            'scooter',
            'buster',
            'captain',
            'cap',
            'ace',
            'hotshot',
            'shotcaller',
            'slugger',
            'junior',
            'buckaroo',
            'buttercup',
            'sheriff',
            'princess',
            'superstar',
            'handsome',
            'beautiful',
            'diesel',
            'darling',
            'love',
            'son',
            'skippy',
            'bro',
            'tiger',
            'bae',
            'boo',
            'babe',
            'sweety',
            'kid',
            'bucko',
            'doll',
            'fella',
            'friendo',
            'grasshopper',
            'padawan',
            'dear',
            'sparky',
            'precious',
            'boy',
            'girl',
            'youngster',
            'babycakes',
            'wap',
            'shorty',
            'muffin',
            'rascal',
            'dude',
            'chum',
            'maestro',
            'sherlock',
            'brewster',
            'casanova',
            'gunner',
            'goose',
            'doc',
            'freckles',
            'einstein',
            'hollywood',
            'huckleberry',
            'prince',
            'sugar',
            'playa',
            'player',
            'playboy',
            'sonny',
            'yoda',
            'cowboy',
            'sniper',
            'shooter',
            'speedy',
            'sharpshooter',
            'operator',
            'maverick',
            'guru',
            'mack',
            'coach',
            'jedi',
            'partner',
            'sunshine',
            'radar',
            'king',
            'queen',
            'husky',
            'buck',
          ];

          $words = collect();

          while ($id > 0) {
            $words->push($id % 100);
            $id = (int)($id / 100);
          }

          return $words->map(function ($word) use ($dictionary) {
            return $dictionary[$word];
          })->implode('-');
        });
    }
}
