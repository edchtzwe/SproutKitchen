<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--Chong Tze Wei @ Edmund; 7440820@gmail.com; https://github.com/edchtzwe; https://au.linkedin.com/in/chong-tze-wei-7b7564103;-->
<HTML><HEAD><TITLE>Sprout Kitchens: Add Listing</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<link rel="stylesheet" type="text/css" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</HEAD>
<BODY>	
<?php
	include_once("header.php");
?>	
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-7">
		<!--This is the form that is to be submitted to the add_listing processing back-end-->
		<P>
            <FORM method=post action="add_listing_process.php" class="col-sm-8">
                <FIELDSET>
                <legend>Basic Details</legend>
                    <P><INPUT placeholder="kitchen name" class="form-control " name=kitchen_name></P>
                    <P>
                        <SELECT class="form-control" name=kitchen_type>
                        <OPTION selected value=0>Kitchen Type</OPTION>
                        <OPTION value=1>Cafe</OPTION>
                        <OPTION value=2>Restaurant</OPTION>
                        <OPTION value=3>Bar</OPTION>
                        <OPTION value=4>Other</OPTION>
                        </SELECT>
                    </P>
                    <LABEL FOR="kitchen_other">
                        If other, please specify: 
                        <INPUT class="form-control" placeholder="Other" name=kitchen_other>
                    </LABEL>  
                </FIELDSET>
                <br>
                <FIELDSET>
                <LEGEND>Address</LEGEND>
                    <div class="row">
                    <div class="col-sm-6">
                        <P><INPUT class="form-control" placeholder="street number" name=loc_number></INPUT></P>   
                        <p><INPUT class="form-control" placeholder="suburb" name=loc_suburb></p>                   
                        <P><INPUT placeholder="city" class="form-control" name=loc_city></P>
                    </div>
                    <!--side-by-side-->
                    <div class="col-sm-6">
                        <P><INPUT class="form-control" placeholder="street name" name=loc_street></P>
                        <P>
                        <select class="form-control" name="state">
                            <option value="0" selected>State</option>
                            <option value="1">ACT</option>
                            <option value="2">NSW</option>
                            <option value="3">NT</option>
                            <option value="4">QLD</option>
                            <option value="5">SA</option>
                            <option value="6">TAS</option>
                            <option value="7">VIC</option>
                            <option value="8">WA</option>
                        </select> 
                        </p>
                        <p><INPUT class="form-control" placeholder="postcode" name=loc_pcode></p>       
                    </div>
                    </div>
                </FIELDSET>
                <br>
                <fieldset>
                <legend>Availability</legend>
                    <div class="row">
                        <span class="checkbox col-sm-6">
                        <P><LABEL FOR=mon><INPUT value="0" type=checkbox name=mon id=mon>Monday</LABEL></P>
                        </span>
                        <span class="col-sm-6">
                        <INPUT class="form-control" placeholder="eg. 0800, 1200, 1500" name=time_mon>
                        </span>
                    </div>
                    <div class="row">
                        <span class="checkbox col-sm-6">
                        <P><LABEL FOR=tue><INPUT value="0" type=checkbox name=tue id=tue>Tuesday</LABEL></P>
                        </span>
                        <span class="col-sm-6">
                        <INPUT class="form-control" placeholder="eg. 0800, 1200, 1500" name=time_tue>
                        </span>
                    </div>
                    <div class="row">
                        <span class="checkbox col-sm-6">
                        <P><LABEL FOR=wed><INPUT value="0" type=checkbox name=wed id=wed>Wednesday</LABEL></P>
                        </span>
                        <span class="col-sm-6">
                        <INPUT class="form-control" placeholder="eg. 0800, 1200, 1500" name=time_wed>
                        </span>
                    </div>
                    <div class="row">
                        <span class="checkbox col-sm-6">
                        <P><LABEL FOR=thu><INPUT value="0" type=checkbox name=thu id=thu>Thursday</LABEL></P>
                        </span>
                        <span class="col-sm-6">
                        <INPUT class="form-control" placeholder="eg. 0800, 1200, 1500" name=time_thu>
                        </span>
                    </div>
                    <div class="row">
                        <span class="checkbox col-sm-6">
                        <P><LABEL FOR=fri><INPUT value="0" type=checkbox name=fri id=fri>Friday</LABEL></P>
                        </span>
                        <span class="col-sm-6">
                        <INPUT class="form-control" placeholder="eg. 0800, 1200, 1500" name=time_fri>
                        </span>
                    </div>
                    <div class="row">
                        <span class="checkbox col-sm-6">
                        <P><LABEL FOR=sat><INPUT value="0" type=checkbox name=sat id=sat>Saturday</LABEL></P>
                        </span>
                        <span class="col-sm-6">
                        <INPUT class="form-control" placeholder="eg. 0800, 1200, 1500" name=time_sat>
                        </span>
                    </div>
                    <div class="row">
                        <span class="checkbox col-sm-6">
                        <P><LABEL FOR=sun><INPUT value="0" type=checkbox name=sun id=sun>Sunday</LABEL></P>
                        </span>
                        <span class="col-sm-6">
                        <INPUT class="form-control" placeholder="eg. 0800, 1200, 1500" name=time_sun>
                        </span>
                    </div>                   
                </fieldset>
                <br>
                <fieldset>
                <legend>Details</legend>
                        <LABEL FOR="size">
                            Size: <INPUT class="form-control" placeholder="S/M/L/XL" name=size>
                        </LABEL> 
                        <br>
                        <LABEL FOR="price">
                            Price(AUD): <INPUT class="form-control" placeholder="pricing per hour" name=price>
                        </LABEL>  
                </fieldset>
                <br>
                <fieldset>
                <legend>Features</legend>
                    <LABEL class="checkbox-inline" FOR=coolroom><INPUT value="0" type=checkbox name=coolroom id=coolroom>Coolroom</LABEL>
                    <LABEL class="checkbox-inline" FOR=store><INPUT value="1" type=checkbox name=store id=store>Store</LABEL>
                    <LABEL class="checkbox-inline" FOR=oven><INPUT value="2" type=checkbox name=oven id=oven>Oven</LABEL>
                    <LABEL class="checkbox-inline" FOR=storage><INPUT value="3" type=checkbox name=storage id=storage>Storage</LABEL>      
                    <br>
                    <br>
                    <p>
                    <LABEL FOR=other_features>
                    Other features
                    <INPUT class="form-control" placeholder="eg. meat slicer, mincer" name=other_features id=other_features>
                    </LABEL>
                    </p>
                </fieldset>                
                <br>
                <INPUT type=submit class="btn btn-primary col-lg-12" value="Add Listing" name=add_listing>
            </FORM>            
        </P>
        </div>
    <div class="col-sm-1"></div>
</div>                        
</BODY>
</HTML>