<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

$papers = array(
    '2021_jss' => array(
        'title' => "iNZight: A Graphical User Interface for Data Visualisation and Analysis through R",
        'authors' => "Elliott, Wild, Barnett & Sporle",
        'year' => "2021 (in press)",
        'journal' => "Journal of Statistical Software",
        'url' => "https://github.com/iNZightVIT/papers/raw/main/2021_jss/index.pdf"
    )
);

?>

<div class="container">

    <?php
    if (isset($_GET['paper']) && isset($papers[$_GET['paper']])) {
        // just show the one paper:
        $paper = $papers[$_GET['paper']];
    ?>

    <h3><?php echo $paper['title']; ?></h3>
    <h4><?php echo $paper['authors'] . " (" . $paper['year'] . ")"; ?></h4>

    <p>
        URL: <a href="<?php echo $paper['url']; ?>"><?php echo $paper['url']; ?></a>
    </p>

    <?php } else { ?>

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
                echo "$p_authors ($p_year). <a href=\"$p_url\"> $p_title.</a> $p_journal.";
                echo "</li>";
            }
            ?>
        </ol>
    </div>

    <?php } ?>

</div>



<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
