<link href="<?php echo base_url(); ?>css/selection.css" rel="stylesheet" type="text/css" media="screen">

    <!-- multistep form -->
    <div class="main">
        <?php echo validation_errors(); ?>
        <?php $attributes = array('id' => 'orderType', 'class' => 'regform'); ?>
			<?php echo form_open('products/form', $attributes); ?>
            <!-- progressbar -->
            <div id="stepBar" class="small-12 centered columns">
                <ul id="progressbar">
                    <li id="active1" class="active">make</li>
                    <li id="active2" class="">model</li>
                    <li id="active3" class="">year</li>
                    <li id="active4" class="">option</li>
                    <li id="active5" class="">order</li>
                </ul>
            </div>
            <!-- fieldsets -->
            <div class="small-12 small-centered columns" id"mainForm">
                <fieldset id="first" class="fieldset">
                    <h2 class="title">select the make of your truck</h2>
                    <?php echo form_dropdown('orders_truckMake', array(
										    					'blank' => 'MAKE',
										    					'Chevrolet' => 'Chevrolet',
										    					'Dodge' => 'Dodge',
										    					'Ford' => 'Ford',
										    					'GMC' => 'GMC',
										    					'Nissan' => 'Nissan',
										    					'Toyota' => 'Toyota'
																), 'blank', 'class="options" id="car"'); ?>
                    <input type="button" id="next_btn1" class="next" value="Next">
                </fieldset>

                <fieldset id="second" class="fieldset">
                    <h2 class="title">select the model of your truck</h2>
	                    <select name="orders_truckModel" id="carmodel" class="options">
	                        <option value="<?php echo set_value('orders_truckModel'); ?>">MODEL</option>
	                    </select>
                    <input type="button" id="pre_btn1" class="prev" value="Previous">
                    <input type="button" name="next" id="next_btn2" class="next" value="Next">
                </fieldset>

                <fieldset id="third" class="fieldset">
                    <h2 class="title">select the year of your truck</h2>
                    	<select name="orders_truckYear" id="year">
		                	<option value="<?php echo set_value('orders_truckYear'); ?>">YEAR</option>
		            	</select>
                    <input type="button" id="pre_btn2" class="prev" value="Previous">
                    <input type="button" value="Next" class="next">
                </fieldset>
                <fieldset id="fourth" class="fieldset">
                    <h2 class="title">select your product option</h2>
                    <div id="orderOptions" class="show">
                        <ul id="optionRadio">
                            <li>
                                <input type="radio" id="stkRadio" name="orders_modified" value="Stock" <?php echo set_radio('mycheck', '1', TRUE); ?> /><label for="stkRadio">Stock</label>
                            </li>
                            <li>
                                <input type="radio" id="mdfRadio" name="orders_modified" value="Modified" <?php echo set_radio('mycheck', '2'); ?> /><label for="mdfRadio">Modified</label>
                            </li>
                        </ul>
                    </div>
                    <div id="extraOpt">
                        <div id="optBed" class="small-6 large-6 columns">
                            <label>Bed Height<span style="color:red;">*</span></label>
                            <input name="orders_bHeight" value="<?php echo set_value('orders_bHeight'); ?>" placeholder="in." />
                        </div>
                        <div id="optTail" class="small-6 large-6 columns">
                            <label>Tailgate Width<span style="color:red;">*</span></label>
                            <input name="orders_tWidth" value="<?php echo set_value('orders_tWidth'); ?>" placeholder="in." />
                        </div>
                    </div>
                    <input type="button" id="pre_btn3" class="prev" value="Previous">
                    <input type="button" name="next" class="next" value="Next">
                </fieldset>


                <div class="medium-12 small-centered columns">
                    <fieldset id="fifth" class="fieldset">
                        <div class="samplePic medium-12 large-12 small-centered columns">
                            <h2 class="title">preview</h2>
                            <div class="ladderPic">
                                <img src="<?php echo base_url('images/1458254954_ladder13.png');?>" id="sample" class="modify" alt="sampleLadder">
                            </div>
                            <div class="preview">
                                <div class="price">Price: Starting from $275.00</div>
                                <div class="specs">Specs: 2012-2016. 30" tall. 4" wide tailgate</div>
                            </div>
                        </div>
                        <h2 class="title">product information</h2>
                        <div id="result">
                            <div id="car-selected">
                                <span>Car Make: </span>
                                <span class="value"></span>
                            </div>
                            <div id="carmodel-selected">
                                <span>Car Model: </span>
                                <span class="value"></span>
                            </div>
                            <div id="year-selected">
                                <span>Year: </span>
                                <span class="value"></span>
                            </div>
                            <div id="product-option-selected">
                                <span>Product option: </span>
                                <span class="value"></span>
                            </div>
                            <div id="noneStock">
                                <div id="bedheight-selected">
                                    <span>Bed height: </span>
                                    <span class="value"></span>
                                </div>
                                <div id="tailwidth-selected">
                                    <span>Tailgate width: </span>
                                    <span class="value"></span>
                                </div>
                            </div>
                        </div>
                        <div class="inputLast">
                            <label>Name<span class="red">*</span></label>
                            <input type="text" name="customers_name" placeholder="First Name Last Name" value="<?php echo set_value('customers_name'); ?>"/>
                            <label>Email<span class="red">*</span></label>
                            <input type="text" name="customers_email" placeholder="your_email@email.com" value="<?php echo set_value('customers_email'); ?>"/>
                            <label>Phone<span class="red">*</span></label>
                            <input type="text" name="customers_phone" placeholder="000-000-0000" value="<?php echo set_value('customers_phone'); ?>"/>
                            <p class="dealerTitle">Select your customer option</p>
                            <input type="radio" id="indivdlOpt" name="customers_category" value="Individual" <?php echo set_radio('mycheck', '1', TRUE); ?> /><label>Individual</label>
							<input type="radio" id="dealerOpt" name="customers_category" value="Dealer" <?php echo set_radio('mycheck', '2'); ?> /><label>Dealer</label>

                            <div id="dealer">
                            <label>Dealership Name</label>
                            <input type="text" name="customers_dealershipName" placeholder="Dealership Name" value="<?php echo set_value('customers_dealershipName'); ?>"/>
                            <label>Dealership Location</label>
                            <input type="text" name="customers_street" placeholder="Dealership Location" value="<?php echo set_value('customers_street'); ?>"/>
                            </div>
                        </div>
                        <div id="end_buttons">
                            <input type="button" id="pre_btn4" class="prev" value="Previous">
                            <input type="Submit" class="submit_btn" value="send">
                        </div>
                        <span class="creditInfo"><strong>NO CREDIT CARD REQUIRED</strong></span>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>

<script src="<?php echo base_url(); ?>js/selection.js"></script>