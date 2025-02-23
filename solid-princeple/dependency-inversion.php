<?php

// in here we will see dependency inversion principle 


class Team
{
    public function build($name)
    {
        echo "let's build $name team";
    }
}


class CricketTeam extends Team {}

$CkTeam = new CricketTeam;
$CkTeam->build('Cricket');
