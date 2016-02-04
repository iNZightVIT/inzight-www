# Multiple Response

A module that provides the ability for analysing data with multiple (binary) response options. Think of this as a checkbox answer, as opposed to a radiobox:

<div style="max-width: 800px; margin: 0 auto">

<div style="display:block; max-width: 400px; float: left; margin-right: 80px">
<h3>Standard factor variable</h3>
  <form>
    What's your favourite fruit?
    <div class="opt-group">
      <input type="radio" name="radio" value="apple"> Apple
      <input type="radio" name="radio" value="banana"> Banana
      <input type="radio" name="radio" value="pear"> Pear
      <input type="radio" name="radio" value="orange"> Orange
    </div>
  </form>
</div>

<div style="display:block; max-width: 400px; float:left">
  <h3>Multiple Response variable</h3>
  <form>
    What fruit do you like?
    <div class="opt-group">
      <input type="checkbox" name="radio" value="apple"> Apple
      <input type="checkbox" name="radio" value="banana"> Banana
      <input type="checkbox" name="radio" value="pear"> Pear
      <input type="checkbox" name="radio" value="orange"> Orange
    </div>
  </form>
</div>

</div>

<div style="clear:both; height: 50px"></div>

The first only lets you provide one option, so the variable only has one column in the dataset:

| person.id | fav_fruit |
| ---------:| --------- |
| 1         | pear      |
| 2         | apple     |
| 3         | orange    |
| 4         | apple     |

The second, however, needs a column for each possible answer:

| person.id | fruit_apple | fruit_banana | fruit_pear | fruit_orange |
| ---------:| -----------:| ------------:| ----------:| ------------:|
| 1         | 1           | 0            | 1          | 0            |
| 2         | 1           | 0            | 1          | 1            |
| 3         | 1           | 1            | 1          | 1            |
| 4         | 1           | 0            | 0          | 0            |

Analysing these are going to require two difference approaches, and that's where the Multiple Response module comes in!


## Getting Started

First, you'll need to load an appropriate dataset. We've provided an example in the included data folder, called <code>CaS2011_5000.csv</code>. Once you've loaded this, you can go to __Advanced__ and click __Multiple Response__.

__Quick note on coding__: in the table above, we've used 1's and 0's to code whether or not someone checked the box. This is the easiest way, however you can also provide "yes" (=1) or "no" (=0) if you prefer.

## Generating Graphs

Once you've loading the Multiple Response window, you'll be able to select variables to compare. The key here is to select __related__ variables. For example, you would select the variables `fruit_apple`, `fruit_banana`, `fruit_pear`, and `fruit_orange` to see how fruit preference is distributed. You can select a subset if you prefer.

The Summary and Combinations buttons will give you summary tables of the data, and a "visual" graph of the combinations occuring in the dataset. The subset dropdowns work just the same as they do in the main iNZight module.
