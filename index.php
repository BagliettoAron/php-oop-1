<?php
class Movie {
    public $title;
    public $original_language;
    public $minut_length;
    public $year;


    function __construct($_title, $_original_language, $_minut_length, $_year) {
        $this->title = $_title;
        $this->original_language = $_original_language;
        $this->minut_length = $_minut_length;
        $this->year = $_year;
    }

    function printPropertiesArray(){
        return [
            'title'=>$this->title,
            'original language' => $this->original_language,
            'duratation minuts'=> $this-> minut_length,
            'year' => $this -> year,
        ];

    }

}

$The_Hunt_For_Red_October = new Movie ('Caccia a Ottobre Rosso', 'English', 135, 1990);

?>

<?php foreach($The_Hunt_For_Red_October->printPropertiesArray() as $key => $film_characteristics) { ?>
    <li> <?php echo "$key: $film_characteristics"; ?> </li>
<?php } ?>