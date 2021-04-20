<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

$papers = array(
    array(
        'title' => "iNZight: A Graphical User Interface for Data Visualisation and Analysis through R",
        'authors' => "Elliott, Wild, Barnett, & Sporle",
        'year' => "2021",
        'journal' => "Journal of Statistical Software",
        'url' => "https://github.com/iNZightVIT/papers/raw/main/2021_jss/index.pdf"
    )
);



?>

<div class="container">

    <h3>Journal Articles</h3>


    <div class="contents_list">

        <ol>
            <?php
            foreach ($papers as $paper) {
                $p_url = $paper["url"];
                $p_authors = $paper["authors"];
                $p_year = $paper["year"];
                $p_title = $paper["title"];
                $p_journal = $paper["journal"];
                echo "<li>";
                echo "content";
                echo "<a href=\"\">content</a>";
                // echo "<a href=\"$p_url\">$p_authors ($p_year). $p_title. $p_journal.</a>";
                echo "</li>";
            }
            ?>
        </ol>
    </div>

</div>



<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
