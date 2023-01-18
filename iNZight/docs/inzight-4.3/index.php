<?php

$rel = "../../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

?>

<div class="container">
  <h3>iNZight 4.3 Release Information</h3>

  <p>
    iNZight 4.3 adds several new features specifically aimed towards working with social surveys, especially those made up of multiple files and/or repeated over time (longitudinal surveys). The new features include:
  </p>

  <ul>
    <li><a href="#multiple-response">Visualisation of multiple response variables</a></li>
    <li>Data dictionaries</li>
    <li>Automatic linking of files</li>
  </ul>

  <hr />

  <h4 id="multiple-response">Multiple response variables</h4>

  <p>
    Multiple response variables are those where respondents can provide more than one answer. A common example of this in social surveys is ethnicity, where individuls are asked to tick all that apply. Typically, this data is coded in separate columns, so the analyst needs to change their process to create accurate graphics and outputs.
  </p>

  <p>
    In this release, iNZight's <em>Variable 1</em> slot has been renovated to allow (when enabled in Preferences) multiple variables to be chosen. When a user does this, new types of graphics are available, such as stacked bar charts with the proportion of 'yes' (or other) responses in each question. This allows easy comparison of answers to a single question.
  </p>

  <h4 id="data-dictionaries">Data dictionaries</h4>

  <p>
      Large datasets, particularly surveys, often have an associated data dictionary containing information about variables. For example,
      human-friendly names/questions, or information about the levels of a numerically coded variable. iNZight 4.3 now allows users to read dictionaries into the software provided it is in a simple tabular (e.g., CSV) format with one row per variable. Not only can users view the dictionary, but the software can automatically "apply" it to the dataset by adding human friendly labels and recoding numbers to categorical.
  </p>

  <h4 id="automatic-linking">Automatic linking of files</h4>

  <p>
    In many social surveys, data is collected over multiple time points. For example, a survey may be conducted in 2010, 2012, 2014, and 2016. In this case, the analyst needs to link the data from each year together. This is a time consuming process, and requires that the user understands the relationships between files.
  </p>

  <p>
    iNZight 4.3 allows users to import a 'link specification' file to automatically link files together based on specified unique identifiers.
    The current use-case is for data managers (those distributing the files) to include the specification file for users to one-click import into iNZight.
    This goes together nicely with the <a href="../survey-specification.html">survey specification</a> format introduced in iNZight 4.1.
  </p>
</div>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
