<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<h3 align="center" style="color:gray;"><?php echo ucwords("check time spent");?></h3>

<?php include"validations.php";?>
<form method="post" actoion="" style="margin:35px;">

<div class="form-group">
	<input type="text" class="form-control" placeholder="Name"  name="user_name" value="<?php echo $name;?>">
</div>
<!-month-->
<div class="form-group">
<small> select Month</small>
<select class="form-control"  id="month_of_birth" name="user_month" > 
<option value="01">January</option>
<option value="02">Febuary</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11"> November</option>
<option value="12">December</option>
</select>
</div>

<div class="form-group">
<small> select Date</small>
<select class="form-control"  id="date_of_birth" name="user_date"> 
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
</div>


<label for="date_of_birth" class="label-control">
Date Of Birth</label>
<br>
<small> select year</small>
<select class="form-control"  id="year_of_birth" name="user_year"> 
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
</select>
<br>
<button type="submit" class="btn btn-outline-primary" name="check_time_spent">Check Time spent</button>
</div>

</form>
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
</div>
</div>