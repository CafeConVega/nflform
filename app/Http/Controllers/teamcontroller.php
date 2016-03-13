<?php

class teamcontroller extends BaseController {
    
    public function showTeams () {
        return View::make('nflteams');
    }
}
