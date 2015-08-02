<?php
$title = 'Sequences' ;
$js_scripts = array('functions.js') ;
include($_SERVER['FILE_PREFIX'] . '/_core/preamble.php') ;
?>
  <p>Let's make some sequences.</p>

  <div class="right">
    <h3>Meta sequence</h3>
	  <div class="blurb">
	    <p>This sequence simply lists the contents of itself.  The next term describes how many of what kind of term comes next in the sequence.  For example, if there are four '1's in a row, the next two terms would be 4, 1.</p>
        <table>
          <tbody>
            <tr>
              <th>Source: </th>
              <td><input type="text" value="1" id="input_meta_source"/></td>
            </tr>
            <tr>
              <th>Number of terms: </th>
              <td><input type="text" value="1000" id="input_meta_terms"/></td>
            </tr>
            <tr>
              <th></th>
              <td><input type="submit" value="Run this sequence" onclick="sequence_meta()"/></td>
            </tr>
          </tbody>
        </table>
        <div id="div_meta"></div>
	  </div>
	</div>

	<div class="right">
    <h3>Fibonacci sequence</h3>
	  <div class="blurb">
	    <p>This is a very famous sequence that follows the rule \(T_{n+1} = T_{n} + T_{n-1}\).</p>
        <table>
          <tbody>
            <tr>
              <th>\(T_1\) </th>
              <td><input type="text" value="1" id="input_fib_t1"/></td>
            </tr>
            <tr>
              <th>\(T_2\) </th>
              <td><input type="text" value="1" id="input_fib_t2"/></td>
            </tr>
            <tr>
              <th>Number of terms: </th>
              <td><input type="text" value="50" id="input_fib_terms"/></td>
            </tr>
            <tr>
              <th></th>
              <td><input type="submit" value="Run this sequence" onclick="sequence_fib()"/></td>
            </tr>
          </tbody>
        </table>
        <div id="div_fib"></div>
	  </div>
	</div>

<?php foot() ; ?>
