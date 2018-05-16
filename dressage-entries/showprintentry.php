<?php
$p = intval($_GET['p']);

include( 'dso-hook.php' );

doDB();

$get_info_sql = 'SELECT riders.LastName, riders.FirstName, riders.Email, riders.StreetAddress, riders.City, riders.State, riders.Zip, riders.CellPhone, riders.HomePhone, riders.Level, riders.DOB, horses.Name, horses.Breed, horses.Color, horses.Height, horses.Age, horses.Gender, horses.Owner, horses.Trainer, riders.Level, entries.ShowID, entries.Stall, entries.Camping, entries.Nights, entries.StableWith, entries.ID FROM ( (entries INNER JOIN riders ON entries.RiderID=riders.ID) INNER JOIN horses ON entries.HorseID=horses.ID) WHERE entries.ID = ' . $p . '';
$get_info_res = mysqli_query( $mysqli, $get_info_sql ) or die(mysqli_error( $mysqli ) );

if(mysqli_num_rows( $get_info_res ) == 1 ) {

	?>

	<table>
		<tr id="row1" class="row">
		<td>
		<table>
			<tr>
				<td class="image"><img src="Tri-State-Dressage-logo2.png" width="50"></td>
				<td class="borderRow" width="500">
					<div class="title">Entry form for TRI STATE DRESSAGE SOCIETY</div>
	<?php				

	while( $entry = mysqli_fetch_array( $get_info_res ) ) {

		$get_date_sql = "SELECT ShowDate FROM shows WHERE ID = " . $entry['ShowID'] . " ";
		$get_date_res = mysqli_query( $mysqli, $get_date_sql ) or die(mysqli_error( $mysqli ) );

		if( mysqli_num_rows( $get_date_res ) == 1 ) {

			while( $date = mysqli_fetch_array( $get_date_res ) ) {

				$ShowDate = $date['ShowDate'];
				$month = date( 'F', strtotime( $ShowDate) );
				$day = date( 'j', strtotime( $ShowDate) );
				$year = date( 'Y', strtotime( $ShowDate) );

				?>

				<div class="title">Show Date <span class="show-date underline"><?php echo $month; ?> / <?php echo $day; ?> / <?php echo $year; ?></div>

				<?php

			}

		}

		?>

		</td>
			<td width="200" style="border: 1px solid #000;"><div class="subTitle">Entry must be<br>RECEIVED the Saturday<br>BEFORE the show!</div></td>
			<td class="emptyBox"> </td>
		</tr>
		</table>
		</td>
		</tr>
		<tr id="row2" class="row">
		<td>
		<table>
			<tr id="row2" class="row">
				<td style="border: 1px solid #000;padding: 6px;" width="600">
					<div class="textBlock">
						<span style="width: 49.4%;"><span class="text">Rider</span><span class="data" style="width: 80%;"><?php echo $entry['FirstName']; ?> <?php echo $entry['LastName']; ?></span></span>
						<span style="width: 49.4%;"><span class="text">Horse</span><span class="data" style="width: 80%;"><?php echo $entry['Name']; ?></span></span>
					</div>
					<div class="textBlock">
						<span style="width: 66.26%"><span class="text">Address</span><span class="data" style="width: 80%;"><?php echo $entry['StreetAddress']; ?></span></span>
						<span style="width: 32.53%"><span class="text">Breed</span><span class="data" style="width: 69%;"><?php echo $entry['Breed']; ?></span></span>
					</div>
					<div class="textBlock">
						<span style="width: 66.26%"><span class="text">City, State Zip</span><span class="data" style="width: 70%;"><?php echo $entry['City']; ?>, <?php echo $entry['State']; ?> <?php echo $entry['Zip']; ?></span></span>
						<span style="width: 32.53%"><span class="text">Gender</span><span class="data" style="width: 65%;"><?php echo $entry['Gender']; ?></span></span>
					</div>
					<div class="textBlock">
						<span style="width: 49.4%;"><span class="text">Level</span><span class="data" style="width: 80%;"><?php echo $entry['Level']; ?></span></span>
						<span style="width: 49.4%;"><span class="text">Color</span><span class="data" style="width: 80%;"><?php echo $entry['Color']; ?></span></span>
					</div>
					<div class="textBlock">
						<span style="width: 66.26%"><span class="text">Birthday</span><span class="data" style="width: 80%;"><?php 
						if( isset( $entry['DOB'] ) ) {
							if( $entry['DOB'] !== '0000-00-00' ) {
								$DOB = date( 'n/j/Y', strtotime( $entry['DOB'] ) );
							}
						} else {
							 $DOB = "";
						}

						echo $DOB; ?> - Required for Jr Riders</span></span>
						<span style="width: 32.53%"><span class="text">Height</span><span class="data" style="width: 69%;"><?php echo $entry['Height']; ?></span></span>
					</div>
					<div class="textBlock">
						<span style="width: 66.26%"><span class="text">Rider Email</span><span class="data" style="width: 75%;"><?php echo $entry['Email']; ?></span></span>
						<span style="width: 32.53%"><span class="text">Age</span><span class="data" style="width: 75%;"><?php echo $entry['Age']; ?></span></span>
					</div>
					<div class="textBlock">
						<span style="width: 49.4%;"><span class="text">Home Phone</span><span class="data" style="width: 68%;"><?php echo $entry['HomePhone']; ?></span></span>
						<span style="width: 49.4%;"><span class="text">Cell Phone</span><span class="data" style="width: 68%;"><?php echo $entry['CellPhone']; ?></span></span>
					</div>
					<div class="textBlock">
						<span style="width: 49.4%;"><span class="text">Owner</span><span class="data" style="width: 80%;"><?php echo $entry['Owner']; ?></span></span>
						<span style="width: 49.4%;"><span class="text">Trainer</span><span class="data" style="width: 78%;"><?php echo $entry['Trainer']; ?></span></span>
					</div>
									</td>
				<td>
					<div class="borderBox" style="text-align: center;">
						<span class="italic bold">Mail completed entry, coggins & fees to:</span><br>
						<span class="bold caps">TSDS SHOW SECRETARY<span><br>
						<span class="underline bold caps">AMY WALSH<br>
						14598 LOW GAP RD<br>
						WEST FORK, AR 72774</span><br>
						<span class="small caps">FOR SHOW INFORMATION EMAIL AMY</span><br>
						<span class="lower bold">amybethw74@gmail.com</span>
					</div>
					<div class="borderBox" style="text-align: center;">
						Ride times will be posted the Wednesday before the show at 
						<span class="bold italic">tristatedressagesociety.com</span> and <span class="bold italic">hollyhillfarm.net</span>
					</div>
				</td>
			</tr>
		</table>
		</td>
		</tr>
		<tr id="row3" class="row">
		<td>
		<table>
			<tr>
				<td style="border: 1px solid #000;text-align: center;padding: 3px;" width="320"><span class="med neat">You must ride a total of three tests WD & Intro thru Training Level & two tests First Level and above to be eligible for div championships.</span></td>
				<td style="border: 1px solid #000;text-align: center;padding: 3px;"><span class="med neat">NR (Non-Ribboned) rides do not place or receive ribbons but scores do count for TSDS awards.</span></td>
				<td style="border: 1px solid #000;text-align: center;padding: 3px;" width="325">
					<span class="bold italic underline neat">Negative coggins within 1 year required.</span><br>
					<span class="small underline neat">CHECK TSDS www.tristatedressagesociety.com</span><br>
					<span class="small underline neat">For name of show organizers so you can HELP!</span><br>
				</td>
			</tr>
		</table>
		</td>
		</tr><!-- End row3 -->
		</table>
		<div id="row4" class="row">
			<div id="col1">
				<table class="feesTable">
					<tr class="subtotal">
						<td class="borderAll pad" width="300">
							<span class="bold cell">Class Fees Subtotal<span>
						</td>
							<?php

							$get_classes_sql = "SELECT tests.Name, tests.abbreviation FROM tests INNER JOIN classes ON classes.TestID = tests.ID WHERE classes.EntryID = " . $p . " ORDER BY tests.ID";
							$get_classes_res = mysqli_query( $mysqli, $get_classes_sql ) or die(mysqli_error( $mysqli ) );

							$rows = mysqli_num_rows( $get_classes_res );

							if( mysqli_num_rows( $get_classes_res ) > 0 ) {

								$display_classes .= '
								<table id="classDesc">
								<tr>
									<th class="med bold borderAll" style="text-align:center;" width="30">Class No.</th>
									<th class="bold borderAll" width="200">Class Description</th>
									<th class="bold med borderAll">$25<br>each test</th>
								</tr>';

								while( $classes = mysqli_fetch_array( $get_classes_res ) ) {

									$test = $classes['Name'];
									$ab = $classes['abbreviation'];
									$fee = '25';
									$total += $fee;

									$display_classes .= '
									<tr>
										<td class="borderAll">' . $ab . '</td>
										<td class="borderAll small">' . $test . '</td>
										<td class="bold borderAll">$' . $fee . '</td>
									</tr>';


								}

								//write this as a function later ...
									if( $rows == 1 ) {

										$display_classes .= str_repeat('
										<tr>
											<td class="borderAll"></td>
											<td class="borderAll"></td>
											<td class="bold borderAll">$</td>
										</tr>', 4);


									} elseif ( $rows == 2 ) {

										$display_classes .= str_repeat('
										<tr>
											<td class="borderAll"></td>
											<td class="borderAll"></td>
											<td class="bold borderAll">$</td>
										</tr>', 3);

									} elseif ( $rows == 3 ) {

										$display_classes .= str_repeat('
										<tr>
											<td class="borderAll"></td>
											<td class="borderAll"></td>
											<td class="bold borderAll">$</td>
										</tr>', 2);

									} elseif ( $rows == 4 ) {

										$display_classes .= str_repeat('
										<tr>
											<td class="borderAll"></td>
											<td class="borderAll"></td>
											<td class="bold borderAll">$</td>
										</tr>', 1);

									}

								$display_classes .= '

								<tr>
									<td class="borderAll"></td>
									<td class="caps bold borderAll" style="text-align:center;">Class Fees Total</td>
									<td class="bold borderAll">$' . $total . '</td>
								</tr>';


							?>

							<td class="sym" width="70">$<?php echo $total; ?></td>

							<?php
							
							}

							?>
							
					</tr>
					<tr class="lateFee">
						<td class="borderAll pad" width="300">
							<span class="bold cell">Late Fee $15</span>
						</td>
						<td class="sym">$</td>
					</tr>
					<tr class="stallFee">
						<td class="borderAll">
							<span class="bold cell">Stall Fee / $30 / night</span><br>
							<span class="bold cell">Nights:</span> <span class="underline" style="padding: 0 5px;"><?php echo $entry['Nights']; ?></span>
							<span class="bold">Stable with:</span> <span class="underline"><?php echo $entry['StableWith']; ?></span>
						</td>
						<?php

						if( $entry['Nights'] > 0 ) {

							$stallFee = $entry['Nights'] * 30;

						}

						?>
						<td class="sym">$<?php echo $stallFee; ?></td>
					</tr>
					<tr class="groundsFee">
						<td class="borderAll">
							<span class="bold cell">Grounds Fee $15</span><br>
							<span class="small neat cell">Not boarded at show farm or not stabled at show then entry must pay.</span>
						</td>
						<td class="sym">$</td>
					</tr>
					<tr class="memberDues">
						<td class="borderAll">
							<span class="bold cell">TSDS Mbr Dues</span><br>
							<span class="small neat cell">$40 Single, $60 New members must fill out separate signed membership form.</span>
						</td>
						<td class="sym">$</td>
					</tr>
					<tr class="campingFee">
						<td class="borderAll pad">
							<span class="bold cell">Camping Fee $30 / night</span>
						</td>
						<td class="sym">$</td>
					</tr>
					<tr class="officeFee">
						<td class="borderAll pad">
							<span class="bold cell">Office Fee $15</span>
						</td>
						<td class="sym">$15</td>
					</tr>
					<tr class="lessBucks">
						<td class="borderAll pad">
							<span class="bold cell">Less TSDS Bucks <span class="med">(incl form)</span></span>
						</td>
						<td class="sym">$</td>
					</tr>
					<tr class="totalPayable">
						<td class="borderAll pad">
							<span class="bold cell">Total Payable TSDS</span>
						</td>
						<td class="sym">$</td>
					</tr>
				</table>
				<div class="borderAll clinic">
					<span class="bold caps">Clinic</span> <span class="underline">payment in advance of $120 and clinic form with requests for scheduling</span> must be sent to Show Secretary or directly to George Newtown.
				</div>
			</div><!-- End col1 -->
			<div id="col2">
				<div id="col2-row1">
					<div id="row-col1" class="inline">
		<?php
		//x 6 Rows...Need to sort this part out dymanically

					echo $display_classes;

	}

}

?>

						</table><!-- End classDesc -->
					</div><!-- End row-col1 -->
					<div id="row-col2" class="inline">
						<div class="officeUse caps bold">OFFICE USE ONLY</div>
							<table id="officeTable">
								<tr>
									<td class="shaded caps borderLeft" width="230">TOTAL AMOUNT DUE</td>
									<td class="borderRight" width="70"></td>
								</tr>
								<tr>
									<td class="shaded caps borderLeft">AMOUNT PAID</td>
									<td class="borderRight"></td>
								</tr>
								<tr>
									<td class="shaded caps borderLeft">BALANCE DUE</td>
									<td class="borderRight"></td>
								</tr>
								<tr>
									<td class="shaded caps borderLeft">MISSING COGGINS</td>
									<td class="borderRight"></td>
								</tr>
								<tr>
									<td class="shaded caps borderLeft">MISSING SIGNATURE</td>
									<td class="borderRight"></td>
								</tr>
								<tr>
									<td class="shaded caps borderLeft">MEMBERSHIP PAID</td>
									<td class="borderRight"></td>
								</tr>
							</table>
						</div><!-- End row-col2 -->
					</div><!-- End col2-row1 -->
					<div id="row2" class="release">
						<div class="caps bold med" style="text-align:center;margin-bottom: 6px;">LIABILITY RELEASE MUST BE SIGNED BY RIDER OR GUARDIAN IF RIDER IS A MINOR.</div>
							<div class="small">
								(USEF) to the following: I agree that I choose to participate voluntarily in the Competition/Clinic with my horse, as a rider, driver, handler, longeur, lessee, owner, agent, coach, trainer, or as parent or guardian of a junior exhibitor. I am fully aware and acknowledge that horse sports and the Competition/Clinic involve inherent dangerous risks of accident, loss and serious bodily injury including broken bones, head injuries, spinal cord injuries, trauma, pain suffering, or death (harm). I agree to release Tri-State Dressage Society and any recognizing entities, the officers, board members and volunteers of Tri-State Dressage Society, the Competition/Clinic and facility from all claims for money damages or otherwise for any harm to me or my horse and for any harm caused by me or my horse to others, even if the harm resulted, directly or indirect-ly, from the negligence of Tri-State Dressage Society or the Competition/Clinic. I agree to expressly assume all risks of harm to my horse, or me including harm resulting from the negligence of Tri-State Dressage Society or the Competition/Clinic. I agree to indemnify (that is, to pay any losses, damages, or costs incurred by) Tri-State Dressage Society or the Competition/Clinic and to hold them harmless with respect to claims for harm to my horse, or me and for claims made by others for any harm caused by me or my horse at the Competition/Clinic. I have read the USEF rules about protective equipment, including Articles 318 and 1712, and I understand that I am entitled to wear protective equipment without penalty, and I acknowledge that the USEF and TSDS strongly encourages me to do so while warning that no protective equipment can guard against all injuries. If I am a parent or guardian of a junior exhibitor, I consent to the child’s participation and agree to all of the above provisions and agree to assume all the obligations of this release on the child’s behalf. I agree that Tri-State Dressage Society, the Competition/Clinic and facility as used above includes all of their officials, officers, directors, employees, agents, personnel, volunteers and affiliated organizations.
							</div>
						<div class="small bold"><span class="caps">WARNING:</span> Under Louisiana Law, an equine activity sponsor or equine
							professional is not liable for any injury to or the death of a participant in equine related activities resulting from the inherent risks of equine activities, pursuant to RR 9:2795:1.
						</div>
						<div style="margin: 0 auto; width: 80%;">
							<span class="Caps Bold">Signature </span> <span style="display:inline-block;width:400px;border-bottom:2px solid #000;"></span><br>
								<span class="Bold">Or Parent Signature if Rider is a <span class="caps">MINOR</span> </span><span style="display:inline-block;width:199px;border-bottom:2px solid #000;"></span>
						</div>
					</div><!-- row2 -->
				</div><!-- End Col2 -->			
			</div><!-- End Row4 -->
		<?php

mysqli_close( $mysqli );
