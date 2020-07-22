function color() {
	var my = document.getElementById('n');
	my.style.background = "red";
}


function sign_in() {
	var vhome = document.getElementById("home");
	vhome.style.visibility = "hidden";
	var vreg = document.getElementById("register");
	vreg.style.visibility = "hidden";
	var vsign = document.getElementById("sign");
	vsign.style.visibility = "visible";
	// var color = document.getElementById("btnsign");
	// color.style.background-color = "blue";
}

function home() {
	var vhome = document.getElementById("home");
	vhome.style.visibility = "visible";
	var vsign = document.getElementById("sign");
	vsign.style.visibility = "hidden";
	var vreg = document.getElementById("register");
	vreg.style.visibility = "hidden";
	// var color = document.getElementById("btnsign");
	// color.style.color = "blue";
}

function register() {
	var vhome = document.getElementById("home");
	vhome.style.visibility = "hidden";
	var vsign = document.getElementById("sign");
	vsign.style.visibility = "hidden";
	var vreg = document.getElementById("register");
	vreg.style.visibility = "visible";
	// var color = document.getElementById("btnsign");
	// color.style.background-color = "blue";
}

function guild() {
	var vguild = document.getElementById("Guild");
	vguild.style.visibility = "visible";
	var vrcc = document.getElementById("RCC");
	vrcc.style.visibility = "hidden";
	var vsec = document.getElementById("Secretary");
	vsec.style.visibility = "hidden";
	var vspk = document.getElementById("Speaker");
	vspk.style.visibility = "hidden";
	var vmale = document.getElementById("Male_Faculty");
	vmale.style.visibility = "hidden";
	var vfemale = document.getElementById("Female_Faculty");
	vfemale.style.visibility = "hidden";
	var vchair = document.getElementById("Whole_Chairpersons");
	vchair.style.visibility = "hidden";
}

// function choice() {
// 	var choice = document.getElementById("image");
// 	choice.style.background-color = "blue";
// 	var choice1 = document.getElementById("votechoice");
// }
function rcc() {
	var vguild = document.getElementById("Guild");
	vguild.style.visibility = "hidden";
	var vrcc = document.getElementById("RCC");
	vrcc.style.visibility = "visible";
	var vsec = document.getElementById("Secretary");
	vsec.style.visibility = "hidden";
	var vspk = document.getElementById("Speaker");
	vspk.style.visibility = "hidden";
	var vmale = document.getElementById("Male_Faculty");
	vmale.style.visibility = "hidden";
	var vfemale = document.getElementById("Female_Faculty");
	vfemale.style.visibility = "hidden";
	var vchair = document.getElementById("Whole_Chairpersons");
	vchair.style.visibility = "hidden";
}

function secretary() {
	var vguild = document.getElementById("Guild");
	vguild.style.visibility = "hidden";
	var vrcc = document.getElementById("RCC");
	vrcc.style.visibility = "hidden";
	var vsec = document.getElementById("Secretary");
	vsec.style.visibility = "visible";
	var vspk = document.getElementById("Speaker");
	vspk.style.visibility = "hidden";
	var vmale = document.getElementById("Male_Faculty");
	vmale.style.visibility = "hidden";
	var vfemale = document.getElementById("Female_Faculty");
	vfemale.style.visibility = "hidden";
	var vchair = document.getElementById("Whole_Chairpersons");
	vchair.style.visibility = "hidden";
}

function speaker() {
	var vguild = document.getElementById("Guild");
	vguild.style.visibility = "hidden";
	var vrcc = document.getElementById("RCC");
	vrcc.style.visibility = "hidden";
	var vsec = document.getElementById("Secretary");
	vsec.style.visibility = "hidden";
	var vspk = document.getElementById("Speaker");
	vspk.style.visibility = "visible";
	var vmale = document.getElementById("Male_Faculty");
	vmale.style.visibility = "hidden";
	var vfemale = document.getElementById("Female_Faculty");
	vfemale.style.visibility = "hidden";
	var vchair = document.getElementById("Whole_Chairpersons");
	vchair.style.visibility = "hidden";
}

function male() {
	var vguild = document.getElementById("Guild");
	vguild.style.visibility = "hidden";
	var vrcc = document.getElementById("RCC");
	vrcc.style.visibility = "hidden";
	var vsec = document.getElementById("Secretary");
	vsec.style.visibility = "hidden";
	var vspk = document.getElementById("Speaker");
	vspk.style.visibility = "hidden";
	var vmale = document.getElementById("Male_Faculty");
	vmale.style.visibility = "visible";
	var vfemale = document.getElementById("Female_Faculty");
	vfemale.style.visibility = "hidden";
	var vchair = document.getElementById("Whole_Chairpersons");
	vchair.style.visibility = "hidden";
}

function female() {
	var vguild = document.getElementById("Guild");
	vguild.style.visibility = "hidden";
	var vrcc = document.getElementById("RCC");
	vrcc.style.visibility = "hidden";
	var vsec = document.getElementById("Secretary");
	vsec.style.visibility = "hidden";
	var vspk = document.getElementById("Speaker");
	vspk.style.visibility = "hidden";
	var vmale = document.getElementById("Male_Faculty");
	vmale.style.visibility = "hidden";
	var vfemale = document.getElementById("Female_Faculty");
	vfemale.style.visibility = "visible";
	var vchair = document.getElementById("Whole_Chairpersons");
	vchair.style.visibility = "hidden";
}

function chair() {
	var vguild = document.getElementById("Guild");
	vguild.style.visibility = "hidden";
	var vrcc = document.getElementById("RCC");
	vrcc.style.visibility = "hidden";
	var vsec = document.getElementById("Secretary");
	vsec.style.visibility = "hidden";
	var vspk = document.getElementById("Speaker");
	vspk.style.visibility = "hidden";
	var vmale = document.getElementById("Male_Faculty");
	vmale.style.visibility = "hidden";
	var vfemale = document.getElementById("Female_Faculty");
	vfemale.style.visibility = "hidden";
	var vchair = document.getElementById("Whole_Chairpersons");
	vchair.style.visibility = "visible";
}



            <section class="row-2">
              <form action="guild.php" method="POST">

  <label id="heading">GUILD PRESIDENT</label><br>
  <?php
       $results = "SELECT * FROM guild_profile";
       if ($view=mysqli_query($connect, $results)){
         $count = 0;
          while($row = mysqli_fetch_assoc($view)){

           if ($count==0) {

             for ($i=0; $i < 1; $i++) {

             if ($i==0) {
              $name = $row['name'];
              ?><label><?php echo $row['name'];?></label><label>            </label><br><?php

              $count =" SELECT COUNT(name) AS new FROM guildd WHERE name='$name'";
              if($view=mysqli_query($connect, $count)) {
               while($row = mysqli_fetch_assoc($view)){
                ?><label><?php echo $row['new'];?></label><br><?php
                                   echo $row['new'];

                     } 
              }
             else {
              echo "noooo";
            }
               
              } 
            
             }

           } elseif ($count==1) {

             for ($i=0; $i < 1; $i++) {

             if ($i==0) {
              ?><label><?php echo $row['name'];?></label><br><?php
               
              } 
            
             }
           } elseif ($count==2) {

             for ($i=0; $i < 1; $i++) {

             if ($i==0) {
              ?><label><?php echo $row['name'];?></label><br><?php
               
              } 
            
             }
           } elseif ($count==3) {

             for ($i=0; $i < 1; $i++) {

             if ($i==0) {
              ?><label><?php echo $row['name'];?></label><br><?php
               
              } 
            
             }
           } elseif ($count==4) {

             for ($i=0; $i < 1; $i++) {

             if ($i==0) {
              ?><label><?php echo $row['name'];?></label><br><?php
               
              } 
            
             }
           } elseif ($count==5) {

             for ($i=0; $i < 1; $i++) {

             if ($i==0) {
              ?><label><?php echo $row['name'];?></label><br><?php
               
              } 
            
             }
           } elseif ($count==6) {

             for ($i=0; $i < 1; $i++) {

             if ($i==0) {
              ?><label><?php echo $row['name'];?></label><br><?php
               
              } 
            
             }
           } elseif ($count==7) {

             for ($i=0; $i < 1; $i++) {

             if ($i==0) {
              ?><label><?php echo $row['name'];?></label><br><?php
               
              } 
            
             }
           } elseif ($count==8) {

             for ($i=0; $i < 1; $i++) {

             if ($i==0) {
              ?><label><?php echo $row['name'];?></label><br><?php
               
              } 
            
             }
           }        


            $count++;
          }
        }
   ?>



	<label id="heading">UNIVERSITY SECRETARY</label><br>
	<label>1</label><br>
	<label>2</label><br>
	<label>3</label><br>
	<label>4</label><br>
	<label>5</label><br>
	<label>6</label><br>
	<label>7</label><br>
	<label>8</label><br>
	<label>9</label><br>


	<label id="heading">UNIVERSITY SPEAKER</label><br>
	<label>1</label><br>
	<label>2</label><br>
	<label>3</label><br>
	<label>4</label><br>
	<label>5</label><br>
	<label>6</label><br>
	<label>7</label><br>
	<label>8</label><br>
	<label>9</label><br>

	<label id="heading">MALE FACULTY</label><br>
	<label>1</label><br>
	<label>2</label><br>
	<label>3</label><br>
	<label>4</label><br>
	<label>5</label><br>
	<label>6</label><br>
	<label>7</label><br>
	<label>8</label><br>
	<label>9</label><br>

	<label id="heading">FEMALE FACULTY</label><br>
	<label>1</label><br>
	<label>2</label><br>
	<label>3</label><br>
	<label>4</label><br>
	<label>5</label><br>
	<label>6</label><br>
	<label>7</label><br>
	<label>8</label><br>
	<label>9</label><br>
              </form>
               <a href="logout.php">logout</a>

            </section>

          </div>
          <form>

</form>

        </div>