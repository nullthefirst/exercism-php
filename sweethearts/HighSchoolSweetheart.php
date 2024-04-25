<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $trimmed_name = trim($name, " ");
        return $trimmed_name[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . ".";

    }

    public function initials(string $name): string
    {
        $names = explode(" ", $name);
        $first_name = $names[0];
        $second_name = $names[1];
        $first_initial = $this->initial($first_name);
        $second_initial = $this->initial($second_name);
        return $first_initial . " " . $second_initial;
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        // return $this->initials($sweetheart_a)
        $person_a = $this->initials($sweetheart_a);
        $person_b = $this->initials($sweetheart_b);
        $output ="     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $person_a  +  $person_b     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *";
        return $output;
    }
}
