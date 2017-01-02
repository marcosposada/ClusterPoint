		<?php
			$page_id = 190;
			# prepare SQL query to get all press realese based on slug
			$query = "SELECT * FROM {$wpdb->posts} WHERE $wpdb->posts.ID = {$page_id} AND post_status = 'publish' LIMIT 1";
			# page object
			$page_item = $wpdb->get_results( $query );
			# prepare title
			$title = 'Cloud Services Agreement and Clusterpoint License Agreement';
			# wrap every word in title with span
			$title_array = explode(" ", $title);
			$title = '';
			foreach($title_array as $title_item) : 
				$title .= '<span>'.$title_item.'</span>'; 
			endforeach;
			# prepare content 
			$content = nl2br($page_item[0]->post_content);
			# format text using WP dafault forrmating
			$content = wpautop( $content, false );
		//echo $content; - used to output single license agreement
		//echo $title; - used to output page header
		?>
		<div id="page-services-agreement" class="single-wrap">
			<section id="hero" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block">
							<div class="row">
								<h1 class="el-animation">
									<span>Clusterpoint</span>
									<span>License</span>
									<span>Agreements</span>
								</h1>
							</div><?php /* End row */ echo "\n"; ?>	
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>	
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End about-contact-form */ echo "\n"; ?>
			
			<section id="" data-ch="true" class="white-before content">
				<div class="container">
					<div id="links" class="row">
						<div class="col-lg-8 col-md-12 center-block el-animation-2">
							<ul>
								<li><a href="#Clusterpoint-DB-License-And-Service-Agreement" onclick="togglePanel('#Clusterpoint-DB-License-And-Service-Agreement');">Clusterpoint DB License And Service Agreement</a></li>
								<li><a href="#Clusterpoint-Cloud-DB-License-Agreement" onclick="togglePanel('#Clusterpoint-Cloud-DB-License-Agreement');">Clusterpoint Cloud DB License Agreement</a></li>
								<li><a href="#Clusterpoint-Cloud-Services-Agreement" onclick="togglePanel('#Clusterpoint-Cloud-Services-Agreement');">Clusterpoint Cloud Services Agreement</a></li>
							</ul>
						</div><?php /* End col-md-10 */ ?>
					</div><?php /* End row */ ?>
					<div id="Clusterpoint-DB-License-And-Service-Agreement" class="row hidden_panel panel_container">
						<div class="col-lg-8 col-md-12 center-block el-animation-2">
							<div>
								<h2>CLUSTERPOINT DB LICENSE AND SERVICE AGREEMENT</h2>

								<p>This license and service agreement (hereafter – “Agreement”) is entered into between SIA “Clusterpoint”, reg.no. 40003850104, legal address at Lāčplēša street 20a, Riga, LV-1011, Latvia (hereafter – “Clusterpoint”) and a person which has been identified in the Order Form (hereafter – “You”),
								hereinafter also referred to as “Party” and collectively “Parties”.</p>

								<h2>Definitions</h2>

								<p><em>Agreement</em> – this Agreement, including Order Form, which is an integral part of this Agreement.</p>

								<p><em>Order Form</em> – Order Form and/or Signature Form to Clusterpoint License and Service Agreement.</p>

								<p><em>Program</em> - Clusterpoint software, which You have chosen by making a respective mark in the Order Form, including documentation, fixes, updates, patches of the respective software, and deliverables resulting from the Technical support which You have been granted certain rights to in accordance with this Agreement and/or another agreement concluded between You and Clusterpoint.</p>

								<p><em>Technical Support</em> – services described at the following website <a href="https://www.clusterpoint.com/docs/4.0/392/support-options">https://www.clusterpoint.com/docs/4.0/392/support-options</a> and which You have chosen to obtain by making a respective mark in the Order Form.</p>

								<p><em>Product</em> – Program and Technical Support.</p>

								<p><em>Partner</em> – a person which, based on an agreement with Clusterpoint, is authorized to distribute and deliver Program and/or Technical Support services provided by Clusterpoint to You, and/or a person which, based on an agreement with Clusterpoint, is authorized to integrate Program in its own product for a further distribution to End Users.</p>

								<p><em>Trade Secret</em> – information which has been designated by its author or holder as a trade secret or which, because of its nature or circumstances surrounding its disclosure, should be treated as a trade secret, even though it has not been designated as a trade secret.</p>

								<p><em>End User</em> – person that acquires Products within the scope of its usual business operations.</p>

								<p><em>Person</em> – any person, including legal entity irrespective of its legal form (joint venture company, limited liability company, partnership and so forth).</p>

								<p><em>Price List</em> – Product prices made available by Clusterpoint.</p>

								<h2>Subject of the Agreement</h2>

								<p>Pursuant to this Agreement, Clusterpoint grants to You upon payment non-exclusive, limited rights to use the Program and/or provides Technical Support.</p>

								<p>For the avoidance of any doubt, sale of Program to You is not the subject of this Agreement and Clusterpoint reserves all rights which are not expressly granted to You by this Agreement.</p>

								<h2>Territory</h2>

								<p>Territory with regard to which You have been granted rights to use the Program and in which You can receive Technical Support is set out in the Order Form.</p>

								<h2>Permitted Use</h2>

								<p>If You have chosen the option “STANDARD” in the Order Form, You can install, use, access, display, run and interact with the Program in other ways for the purposes of conducting Your usual business during an unlimited period of time, subject to terms and conditions of this Agreement.</p>

								<p>If You have chosen the option “APS” in the Order Form, You can install, use, access, display, run and interact with the Program in other ways within the scope of conducting Your usual business for a specific purpose as set forth in the Order Form, during an unlimited period of time and subject to terms and conditions of this Agreement.</p>

								<p>If You have chosen the option “OEM” in the Order Form, You can install, use, access, display, run and interact with the Program in other ways for the purpose of integrating the Program in Your product and assigning it to an End User as a part of Your product, in accordance with the terms and conditions of this Agreement and Clusterpoint OEM Partner Agreement concluded between Clusterpoint and You.</p>

								<p>Clusterpoint does not grant You any rights to the source code of the Program.</p>
								<p>To the extent permitted by law, Clusterpoint expressly denies any warranty in relation to a possibility to integrate Program in Your product or in relation to operability of Program integrated in Your product.</p>

								<p>If You have chosen option “DEVELOPMENT” in the Order Form, You can install, use, access, display, run and interact with the Program in other ways within the scope of conducting Your business during an unlimited period of time and in accordance with the terms and conditions of this Agreement solely:<ul>
								<li>to integrate Programs in Your products;</li>
									<li>to create prototypes of Your products;</li>
									<li>to provide training to Your employees.</li></ul>
								If You use Program, rights to which have been granted to You pursuant to this DEVELOPMENT license contrary to terms and conditions of this Agreement, or otherwise act contrary to terms and conditions of this Agreement, You shall pay to Clusterpoint a sum of money equivalent to a full price of Program STANDARD license for each such event. Price List which is effective at the time when Clusterpoint finds out about the breach of terms and conditions of this Agreement shall be used to calculate the sum of money payable by You to Clusterpoint.</p>



								<p>If You have chosen the option “TRIAL” in the Order Form, You can install, use, access, display run and interact with the Program in other ways within the scope of conducting Your usual business solely for the purpose of internal evaluation for 30 (thirty) calendar days starting from the day when Clusterpoint has signed the respective Order Form and in accordance with the terms and conditions of this Agreement.</p>
								<p>You shall not use the Program in the production environment or for the purpose of development and prototype creation, training or provision of technical support.</p>
								<p>After the expiry of the aforementioned 30-day term, You shall immediately stop using the Program and delete all copies of the Program and provide Clusterpoint with a written certification of such deletion and destruction. If You continue using the Program after the aforementioned term, You shall immediately acquire a respective Program license.</p>
								<p>Program licensed to You for trial purposes is provided to You “as is” and Clusterpoint neither provides any warranties nor assumes any liability for it.</p>
								<p>If You use Program, rights to which have been granted to You pursuant to this TRIAL license, contrary to terms and conditions of this Agreement, or otherwise act contrary to terms and conditions of this Agreement, You shall pay to Clusterpoint a sum of money equivalent to a full price of Program STANDARD license for each such event. Price List which is effective at the time when Clusterpoint finds out about the breach of terms and conditions of this Agreement shall be used to calculate the sum of money payable by You to Clusterpoint.</p>

								<p>If Clusterpoint has granted to You Alpha and/or Beta version of the Program, You can use the Alpha and/or Beta version of the Program within the Territory for 12 (twelve) calendar months starting from the effective date of this Agreement solely for the testing and evaluation purposes. Alpha and/or Beta version of the Program shall not be used for performance of tasks which fall within the scope of conducting Your usual business.</p>
								<p>After the expiry of the aforementioned 12 months period, You shall immediately stop using the Alpha and/or Beta version of the Program and delete all copies of the Program and provide Clusterpoint with a written certification of such deletion and destruction. If You continue using the Program after the aforementioned term, You shall immediately acquire a respective Program license.</p>
								<p>Program licensed to You as an Alpha and/or Beta version is provided to You “as is” and Clusterpoint neither provides any warranties nor assumes any liability for it.</p>
								<p>If You use the Alpha and/or Beta version of the Program contrary to terms and conditions of this Agreement, or otherwise act contrary to terms and conditions of this Agreement, You shall pay to Clusterpoint a sum of money equivalent to a full price of Program STANDARD license for each such event. Price List which is effective at the time when Clusterpoint finds out about the breach of terms and conditions of this Agreement shall be used to calculate the sum of money payable by You to Clusterpoint.</p>

								<h2>Retention of Rights</h2>

								<p>Clusterpoint retains all rights which have not been expressly transferred to You by this Agreement, including, but not limited to, ownership rights and intellectual property rights to the Program and deliverables of the Technical Support services.</p>



								<h2>Restrictions</h2>

								<p>Unless You have been expressly permitted by this Agreement, You must not:
									<ul>
								<li>Use the Products in a manner contrary to what is set out in this Agreement;</li>
									<li>Cause or engage in reverse engineering, de-compilation or disassembly the Program unless such rights have been granted to You by law.</li>
									<li>Separate or remove components of the Program including, but not only, with the view to operating them on various hardware units or software or distribution to other persons.</li>
									<li>Remove or modify any Program markings or notices including but not limited to notice of Clusterpoint’s proprietary rights.</li>
									<li>Disclose results of any Program benchmark tests without prior written consent of Clusterpoint.</li>
									<li>Make copies of the Program except of one back up copy.</li>
									<li>Carry out activities which might be detrimental to the operation of Clusterpoint including but not limited to causation of damages to Clusterpoint.</li>
									<li>Use the Product for illegal purposes.</li>
								</ul>
								<p>As far as possible, You shall ensure that the above mentioned activates are not carried out by other persons.</p>

								<p>You are also obliged to immediately inform Clusterpoint about occurrence of any above described restrictive activities which You know or should have known about.</p>

								<h2>Trade Marks, Design and Patents</h2>

								<p>You are not granted any rights to the trade marks, designs and/or patents related to the Product or any rights to register or submit for registration trademarks, designs and/or patents related to the Product in Your own name or on behalf of any other person, unless You have received prior written consent from Clusterpoint.</p>

								<p>You are not allowed to use, submit for registration or register trademarks, patents and/or design which might mislead regarding, inter alia, Your rights to Product, origin of Your product or Your relationship with Clusterpoint, including use of the aforementioned as a part of Your product or service name, Your company name or domain name.</p>

								<p>Clusterpoint reserves the right to register all trademarks, designs, and/or patents in the Territory and outside it and make unfettered use of any and all trademarks, designs and patents associated with the Product whether such exist and have been registered in any jurisdiction on the effective date of this Agreement or not.</p>

								<p>You shall do nothing during or after the termination of this Agreement, which may adversely affect the validity or enforceability of Clusterpoint’s trademarks, designs and/or patents or which may restrict   Clusterpoint’s right to freely make use of and to gain the benefit of any trademarks, designs and /or patents.</p>

								<p>You shall immediately inform Clusterpoint about any improper, illegal or wrongful use of the trademarks, designs and/or patents in the Territory or outside it.  Pursuant to a written request by Clusterpoint and at Clusterpoint’s cost, You shall assist in taking all steps to defend the rights of Clusterpoint including any actions which Clusterpoint may deem necessary to commence for the protection of any of its rights in respect of the trademarks, designs and/or patents.</p>

								<h2>Acquiring the Products</h2>

								<p>If You are an End User acquiring Products directly from Clusterpoint, then You shall acquire Products by ordering Products.</p>

								<p>To order Products, You shall fill out an Order Form in 2 (two) copies and submit both original copies to Clusterpoint (hereinafter also the “Placing of Order”). You shall, amongst other, identify in the Order Form Products and necessary Product quantity (hereinafter also the “Order”).</p>

								<p>As soon as the Order is Placed, content of the Order may no longer be revoked or amended without a prior written consent of Clusterpoint.</p>

								<p>If Clusterpoint elects to execute the Order, then Clusterpoint shall within 5 (five) business days from the receipt of the Order Form sign the Order Form and send to You one signed copy of the Order Form (hereinafter also referred to as the “Acceptance of Order”) and You will either be able to download the Program at the Clusterpoint website <a href=" https://www.clusterpoint.com"> https://www.clusterpoint.com</a> or receive Program by means mutually agreed between You and Clusterpoint.</p>

								<p>Clusterpoint is not obliged to Accept the Order.

								<h2>Effective Date</h2>

								<p>The effective date of this Agreement is the date when both Parties have signed the Order Form, unless a different effective date is established under the Order Form.</p>

								<h2>Term and Termination of the Agreement</h2>

								<p>This Agreement has been concluded for an indefinite period of time.</p>

								<p>If either Party breaches a material term of this Agreement and fails to correct the breach within 15 (fifteen) days of receipt of written notice of the breach from the other Party, the Party who sent the notice shall be entitled to terminate this Agreement with immediate effect. Material breach of the terms and conditions of this Agreement includes but is not restricted to a situation where Clusterpoint has not received remuneration which it is entitled to for granting rights to use the Program and/or providing Technical Support to You even though Your Partner is obliged to provide remuneration to Clusterpoint for such Program use rights and/or Technical Support.</p>

								<p>If Clusterpoint terminates this Agreement as specified in this section of the Agreement, Partner shall pay all sums due to Clusterpoint pursuant to this Agreement within the term and manner applicable to the particular payments, but in no event later that within 30 (thirty) days after termination of this Agreement.</p>

								<p>In the event of termination of the Agreement as provided in this Section of the Agreement, You must immediately stop using the Program and delete all copies of the Program and provide Clusterpoint with a written certification of such deletion and destruction.</p>

								<p>Provisions that survive termination of the Agreement are those relating to limitation of liability, payment and others which by their nature are intended to survive the termination of the Agreement.</p>

								<h2>Fees and taxes</h2>

								<p>If You are an End User acquiring Products directly from Clusterpoint, You shall pay to Clusterpoint for Products which Clusterpoint has undertaken to deliver to You by approving the Order, based on the price of a Product as set out in the Order Form, adding any sales, value-added or other similar taxes imposed by applicable law, and applying discounts, if such are granted to You by Clusterpoint.</p>

								<p>Fees for the Products shall be paid by wire transfer to the bank account set out in the invoice issued by Clusterpoint to You within 30 (thirty) days from the date of the invoice unless a different order of payment is specified in the Order Form. Clusterpoint shall issue invoice at the time of Approval of Order and send invoice to You electronically to the e-mail address of Your contact person as specified in the Order Form, unless You have specifically instructed Clusterpoint about Your wish to receive a hard copy of invoices.</p>

								<p>If the Program is distributed and delivered to You by Partner, You shall make the respective payments for the Program license to the Partner in accordance with an agreement which exists between You and the Partner, including an agreement about the price of Program license.</p>

								<p>If the Technical Support provided by Clusterpoint is distributed and delivered to You by Partner, then during the first year of provision of Technical Support You shall make the respective payment for Technical Support to Partner in accordance with an agreement which exists between You and the Partner, including an agreement about the price of Technical Support. Starting from the second year of provision of Technical Support, You shall make the respective payments for the Technical Support to Clusterpoint or a person authorized by Clusterpoint (of which Clusterpoint will inform You in writing at least 30 (thirty) days before the term of the particular payment), based on the price of Technical Support as set out in the Order Form and applicable starting from the second year of provision of Technical Support, adding any sales, value-added or other similar taxes imposed by applicable law, and applying discounts, if such are granted to You by Clusterpoint.</p>

								<p>Fees for the Technical support payable to Clusterpoint shall be paid by wire transfer to the bank account set out in the invoice issued by Clusterpoint or a person authorized by Clusterpoint to You within 30 (thirty) days from the date of the invoice unless a different order of payment is specified in the Order Form. Clusterpoint or a person shall issue invoice not sooner than 30 (thirty) days before the first day of the second year of provision of Technical Support services and shall send invoice to You electronically to the e-mail address of Your contact person as specified in the Order Form, unless You have specifically instructed Clusterpoint about Your wish to receive a hard copy of invoices.</p>

								<p>All payments to Clusterpoint shall be made in EUR unless the Parties have agreed otherwise.</p>

								<p>Upon Placement of the Order, Your payment obligation is irrevocable and non-cancellable and if not otherwise agreed by the Parties, it is not subject to set-off and is not subject to the completion or occurrence of any event after the date on which the Order is Placed. Such payment obligation continues to exist following Placement of the Order without any right of revocation or cancelation even where Clusterpoint terminates provision of the Technical Support.</p>

								<h2>Late Interest</h2>

								<p>In the event that You fail to make payment in the order set out in the Agreement (including the amount and term set out in the Agreement) a penalty shall be applied at a daily rate of 0.1% (one tenth of one per cent) on the outstanding amounts but not exceeding 100% (one hundred percent) of the outstanding amount.</p>

								<p>For the avoidance of doubt, unless the Parties have agreed otherwise in writing, payments received from You shall be used to discharge sums due (including any interest charged on overdue payments) in accordance with invoices delivered by Clusterpoint in their chronological order.</p>

								<p>Payment of late interest shall not release You from the obligation to perform payments.</p>

								<h2>Technical Support</h2>

								<p>If You have chosen to receive Technical Support by making a respective mark in the Order Form, it will be presumed that Parties have agreed on provision of Technical Support for one year starting from the effective date of this Agreement. If neither Party notifies the other Party about its explicit wish to terminate the provision of Technical Support in writing at least three months before the end of the one-year term, it will be deemed that Parties have agreed on provision of Technical Support in accordance with terms and conditions of this Agreement for one more year.</p>

								<p>Terms and conditions of provision of Technical support which are not included in this Agreement but which form an integral part of this Agreement and are binding to You are published on the following Clusterpoint website <a href="https://www.clusterpoint.com/docs/4.0/392/support-options">https://www.clusterpoint.com/docs/4.0/392/support-options</a> and are subject to change. You will receive Technical support in accordance with the terms and conditions which are published on the aforementioned website at the time of provision of Technical support services.</p>

								<p>At any point in time, Clusterpoint may decide to discontinue providing Technical Support to a certain Program. Clusterpoint will inform You or Your Partner, if Technical Support was delivered and distributed to You by Partner, about such a decision in writing at least three months in advance. If Clusterpoint decides to discontinue Technical Support which You have acquired, Clusterpoint will return to You or to Partner, if You have made the respective payments for Technical Support to Partner, all sums which Clusterpoint has received for provision of Technical Support for a period when such services are no longer provided.</p>

								<p>Each Party shall be entitled to terminate this Agreement with regard to provision of Technical Support: a) for any reason whatsoever, giving notice in writing no later than 90 (ninety) days in advance, or b) with immediate effect, by notice given to the other Party in writing, if a bankruptcy, insolvency or liquidation process of other Party has been initiated.</p>

								<p>In the event of such termination, You shall pay for the Technical Support which You have already received not later than within 30 (thirty) days from the date of termination, and Clusterpoint shall return all sums of money received for Technical Support with respect to period of time during which Technical Support will be no longer provided.</p>

								<p>Provisions that survive termination of the Agreement are those relating to limitation of liability, payment and others which by their nature are intended to survive the termination of the Agreement.</p>


								<h2>Third Party Software</h2>

								<p>Program may contain third party proprietary programs that are either licensed or supplied for distribution and delivery under separate terms and conditions that are different from those which are set out in this Agreement. The Program may also contain third party open source software that Clusterpoint licenses under terms and conditions of Clusterpoint’s this Agreement. All such terms and conditions which may be binding You are published on the following Clusterpoint website <a href="https://www.clusterpoint.com/docs/4.0/374/3rdpartylicenses">https://www.clusterpoint.com/docs/4.0/374/3rdpartylicenses</a> You have a duty read the information published on the aforementioned website before You sign the Order Form.</p>

								<p>If, pursuant to the information published on the aforementioned Clusterpoint website, You have to obtain a license from a third person to use the Program, it is Your duty to receive such license before signing the Order Form.</p>

								<p>If You have not received the necessary license, Clusterpoint is entitled to decline Approval of Order.</p>

								<h2>Open Source License Restrictions</h2>

								<p>Program is not an open source software.</p>

								<p>Considering that open source license terms may impose certain obligations with regards to a computer code, Partner shall not engage in any activities, including, but not limited to, incorporation, modification, combination and/or distribution of the Program code (or any intellectual property associated therewith) with any other code in a way which would subject Program code (or any intellectual property associated therewith) to any open source license terms.</p>

								<h2>Assignment</h2>

								<p>You shall not assign this Agreement and liabilities and rights arising from the Agreement, as well as sell, assign, rent, lease, lend, host or timeshare or make the Program available to any other person or for the benefit of any other person in other manner or enter into this Agreement on behalf of or in the interests of any person unless You are expressly permitted so by this Agreement or You have received prior acceptance in writing from Clusterpoint.</p>

								<h2>Program Documentation</h2>

								<p>You will have access to Program documentation at the following Clusterpoint website <a href="https://www.clusterpoint.com/docs/4.0/30">https://www.clusterpoint.com/docs/4.0/30</a></p>

								<h2>Fixes, Updates and Patches</h2>

								<p>Unless Program fixes, updates and patches are released by Clusterpoint generally to all users of Clusterpoint Program, You may receive fixes, updates and patches as a part of Technical Support.</p>

								<p>Clusterpoint is not obliged to release and provide Program fixes, updates and patches.</p>

								<p>Fixes, updates and patches are licensed based on the same license terms and conditions as the Program.</p>

								<h2>Warranty</h2>

								<p>Clusterpoint warrants that Program will substantially work as described in the Program documentation for a one-year period from the date when Clusterpoint has granted Program use rights to You. This limited warranty does not apply if Program has failed to work because of an accident or as a result of abuse or misapplication, including running the Program on unsuitable hardware by You and/or other persons who are not Clusterpoint.</p>

								<p>Clusterpoint warrants that Technical Support will be provided in a manner consistent with industry standards.</p>

								<p>In the event of arising of such circumstances that allow You to rely on this warranty, Clusterpoint will, at its own discretion, either reimburse sums of money paid for the Product or will repair or replace the Product. Clusterpoint does not warrant that it will fix any and all Program errors.</p>

								<p>To the extent permitted by law, Clusterpoint expressly denies any other warranty, assurance and representation which is not expressly and unambiguously provided for in this Agreement, including, but not limited to, any and all warranties, assurances and representations with regard to ownership rights and intellectual property ownership rights and non-infringement thereof, uninterrupted and error free work, merchantability, satisfactory quality, use of care and skill, performance within a certain time and ability of Clusterpoint to correct errors in operation of the Product.</p>

								<h2>Limitation of Liability</h2>

								<p>Regardless of the legal basis for Your damages claim against Clusterpoint, to the maximum extent permitted by law, liability of Clusterpoint will be limited to direct damages caused to You in the aggregate up to the amount that Clusterpoint has received in relation to the Order giving rise to the basis for the claim.</p>

								<p>Neither Party shall be liable for any indirect, incidental, special, punitive or consequential damages, or any loss of profits, revenue, data or data use or any other damages, unless liability for such damages is explicitly provided for by this Agreement. This limitation of liability does not apply to the claims raised by Clusterpoint or on behalf of Clusterpoint if You have engaged in activities which have negatively affected Clusterpoint and You knew or You should have known that such activities could have a negative effect on Clusterpoint.</p>

								<p>These provisions on limitation of liability do not apply to the situations as provided in the “Defense” section of this Agreement.</p>

								<h2>Defense</h2>

								<p>If a claim or accusation is made against You and such claim or accusation is based on an allegation that the Program breaches intellectual property rights or rights to a commercial secret of the claimant, Clusterpoint will defend You against such claim or accusation and will compensate to You amounts corresponding to any adverse final judgment or settlement, provided that Clusterpoint has agreed to such settlement in advance in writing.</p>

								<p>Defense and compensation will only be provided to You if You:
								<ul>
								<li>immediately inform Clusterpoint about any such claim or accusation;</li>
									<li>pursuant to a written request from Clusterpoint, provide Clusterpoint with sole control of the management of the Your defense or conclusion of settlement;</li>
									<li>does not interfere with the management of Your defense or conclusion of settlement and, as far as possible and pursuant to a request by Clusterpoint, provide assistance in the management of Your defense;</li>
									<li>have not directly or indirectly caused the claim or accusation, including, but not limited to that claim or accusation not being caused by You combining the Program with other programs or hardware, Your distribution of the Program to third persons, Your failure to stop use of the Program pursuant to a respective demand by Clusterpoint, or Your failure to obtain the necessary licenses or permits to deliver and distribute or use the Program.</li>
								</ul></p>
								<h2>Confidentiality</h2>

								<p>As a result of this Agreement Parties may have had access to information which is deemed to be a Trade Secret of the other Party.</p>

								<p>Neither Party shall disclose a Trade Secret of other Party during the term of this Agreement or for a period of five years after the term of this Agreement, except where the information lawfully becomes known to the Party without it knowing that the information is a Trade Secret, or the information lawfully becomes publicly known, or the information is lawfully received from a third person without an obligation to keep it confidential, or the information is lawfully requested by government officials and an obligation to disclose the information becomes legally binding upon the Party.</p>

								<p>To the extent necessary to implement the provisions of this Agreement each Party may disclose the Trade Secret to such of its employees as may be reasonably necessary. Before any disclosure of the Trade Secret, each Party shall make such employees aware of the obligations of confidentiality under this Agreement and shall at all times ensure compliance by such employees with the confidentiality provisions set out in this Agreement.</p>

								<p>If a Party violates the confidentiality provisions and discloses confidential information and the disclosure of the confidential information results in damages to the other Party, the Party at fault shall pay a penalty in the amount of Euro 10 000. If the Party in question can prove that its damages exceed the aforesaid amount, the Party may claim damages in excess of the aforesaid amount.</p>

								<h2>Force majeure</h2>

								<p>Force Majeure shall mean any event beyond the reasonable control of Parties and which is unavoidable notwithstanding the reasonable care of the Party affected.</p>

								<p>If either Party is affected in performing any of its obligations under the Agreement by an event of Force Majeure, then it shall notify the other Party in writing of the occurrence of such event within 14 (fourteen) days after the occurrence of such event.</p>

								<p>The Party which has given such notice shall be excused from the performance or punctual performance of its obligations under the Agreement for so long as the relevant event of Force Majeure continues and to the extent that such Party’s performance is affected.  The time for completion of obligation under the Agreement shall be extended until the end of even of Force Majeure.</p>

								<p>The Party or Parties affected by the event of Force Majeure shall use reasonable efforts to mitigate the effect thereof upon its or their performance of the Agreement and to fulfill its or their obligations under the Agreement, but without incurring a right to terminate the Agreement.</p>

								<p>The occurrence of Force Majeure events shall not affect any obligation of You to make payments to Clusterpoint.</p>

								<h2>Audit</h2>

								<p>On at least 5 (five) days’ prior written notice to You, Clusterpoint is entitled at its own costs to carry out an audit of You for the purpose of ascertaining compliance with the terms and conditions of this Agreement.</p>

								<p>You undertake to cooperate with Clusterpoint during the audit and to provide and ensure access to information required for the audit including Your financial documents.</p>

								<p>Clusterpoint’s right to carry out Your audit shall survive the termination of this Agreement.</p>

								<h2>Notices</h2>

								<p>Any notice, request or other information to be given under this Agreement shall be prepared in writing and sent by registered mail, or by courier (receipt requested) to the Parties at their respective addresses set forth in this Agreement (Your address is provided in the Order Form).</p>

								<p>Parties undertake to immediately inform each other in writing about the change of address set forth in this Agreement. If Clusterpoint publishes information about the change of its address on the following Clusterpoint website <a href="https://www.clusterpoint.com/">https://www.clusterpoint.com/</a> immediately after the change of address, it will be deemed that Clusterpoint has informed You about the change of address as prescribed in this section of the Agreement. You are obliged to review content of the aforementioned website to find out information about the address of Clusterpoint.</p>

								<h2>Entire Agreement</h2>

								<p>This Agreement constitutes the entire agreement between the Parties and supersedes any other prior communication between the Parties.</p>

								<p>This Agreement may be amended based on the mutual agreement of the Parties. Amendments must be in writing and signed by both Parties.</p>

								<h2>Other</h2>

								<p>In the event that any of the provisions of this Agreement are or become invalid, the validity of the other provisions of this Agreement shall not be affected by the invalid provision. In such case, the invalid provision shall be deemed replaced by its legally valid interpretation which comes as close as possible to the intentions of the Parties as contemplated by this Agreement reflecting the economic purpose and effect of the invalid provision.</p>

								<p>The Parties hereto agree to execute such other documents and to take such other action as may be reasonably necessary to further the purposes of this Agreement or exercise the rights contained in this Agreement.</p>

								<p>This Agreement shall be binding upon the Parties and their respective successors.</p>

								<p>This Agreement and the rights and obligations hereunder may not be assigned or otherwise transferred to other person by any Party in any manner without the prior written consent of the other Party.</p>

								<p>This Agreement shall be governed by the laws of the Republic of Latvia.</p>

								<p>Any dispute, controversy or claim arising out of or relating to this Agreement, or the breach, termination or invalidity thereof, shall be settled in the court of the Republic of Latvia applying the laws of the Republic of Latvia.</p>

								<p>This Agreement is executed in the English language in 2 (two) copies. All copies of this Agreement are valid and the same, and signed and understood by both Parties. Each signatory shall be entitled to one (1) copy of the signed Agreement.</p>

								<p><a href="#page-services-agreement" class="pull-right">Go to the top of the page</a></p>
							</div>
						</div><?php /* End col-md-10 */ ?>	
					</div><?php /* End row */ ?>
					<div id="Clusterpoint-Cloud-DB-License-Agreement" class="row hidden_panel panel_container">
						<div class="col-lg-8 col-md-12 center-block el-animation-2">
							<div>
							<h2>CLUSTERPOINT CLOUD DB LICENSE AGREEMENT</h2>

							<p>Version 3.0</p>

							<h2>Definitions</h2>

							<p><em>Agreement</em> – this Agreement, made available by Clusterpoint at: <a href="https://www.clusterpoint.com/cloud-services-agreement-and-clusterpoint-license-agreement">https://www.clusterpoint.com/cloud-services-agreement-and-clusterpoint-license-agreement</a>.</p>
							<p><em>Clusterpoint</em> - SIA “Clusterpoint”, reg.no. 40003850104, registered address at Lāčplēša street 20a, Riga, LV-1011, Latvia.</p>

							<p><em>End User</em> – person that acquires Program within the scope of its usual business operations.</p>

							<p><em>Program</em> - Clusterpoint software licensed pursuant to this Agreement, including documentation, fixes, updates, patches of the respective software as well as deliverables of the Technical Support, if provided to You.</p>

							<p><em>Person</em> – any person, including legal entity irrespective of its legal form (joint venture company, limited liability company, partnership and so forth).</p>

							<p><em>Technical support</em> - services described at <a href="https://www.clusterpoint.com/docs/4.0/392/support-options">https://www.clusterpoint.com/docs/4.0/392/support-options</a> and provided by Clusterpoint or by a person appointed by Clusterpoint based on a separate agreement between You and Clusterpoint or a person appointed by Clusterpoint.</p>

							<p><em>Trade Secret</em> – information which has been designated by its author or holder as a trade secret or which, because of its nature or circumstances surrounding its disclosure, should be treated as a trade secret, even though it has not been designated as a trade secret.</p>

							<p><em>You</em> – the person that has registered an account with Clusterpoint and entered into this Agreement with Clusterpoint.</p>

							<h2>Subject of the Agreement</h2>

							<p>Pursuant to this Agreement, Clusterpoint grants to You non-exclusive, limited rights to use the Program.</p>

							<p>For the avoidance of any doubt, sale of Program to You is not the subject of this Agreement and Clusterpoint reserves all rights which are not expressly granted to You by this Agreement.</p>


							<h2>Permitted Use</h2>

							<p>You can install, use, access, display, run and interact with the Program in other ways for the purposes of conducting Your usual business during an unlimited period of time, subject to terms and conditions of this Agreement.</p>

							<h2>Integration of Program in Your product</h2>

							<p>You can integrate the Program in Your product and assigning it to an End User as a part of Your product.</p>

							<p>You shall ensure that any assignment of Program to the End User as a part of Your product is in accordance with legally binding license agreement concluded between You and the End User.</p>

							<p>You shall include in the license agreement between You and the End User all terms and conditions of the current version of the Clusterpoint Cloud DB License Agreement, which is in effect at the time of conclusion of a license agreement between You and End User and which is available to You at the following Clusterpoint website:
								<a href="https://www.clusterpoint.com/cloud-services-agreement-and-clusterpoint-license-agreement">https://www.clusterpoint.com/cloud-services-agreement-and-clusterpoint-license-agreement</a>.</p>

							<p>You shall ensure that such license agreement concluded between You and End User contains the same or higher standards of protection of Clusterpoint’s rights as in the Clusterpoint License Agreement, and provides that Clusterpoint is a third party beneficiary thereof. You shall at the same time ensure that the third party beneficiary status of Clusterpoint does not result in Clusterpoint assuming obligations pursuant to a license agreement concluded between You and End User.</p>

							<p>Clusterpoint does not grant You any rights to the source code of the Program.</p>

							<p>To the extent permitted by law, Clusterpoint expressly denies any warranty in relation to a possibility to integrate Program in Your product or in relation to operability of Program integrated in Your product.</p>

							<p>You shall not provide to End Users any warranties or express representations on the Program.

							<h2>Retention of Rights</h2>

							<p>Clusterpoint retains all rights which have not been expressly transferred to You by this Agreement, including, but not limited to, ownership rights and intellectual property rights to the Program.</p>


							<h2>Restrictions</h2>

							<p>Unless You have been expressly permitted by this Agreement, You must not:
							<ul>
								<li>Use the Program in a manner contrary to what is set out in this Agreement.</li>
								<li>Cause or engage in reverse engineering, de-compilation or disassembly the Program unless such rights have been granted to You by law.</li>
								<li>Separate or remove components of the Program including, but not only, with the view to operating them on various hardware units or software or distribution to other persons.</li>
								<li>Remove or modify any Program markings or notices including but not limited to notice of Clusterpoint’s proprietary rights.</li>
								<li>Disclose results of any Program benchmark tests without prior written consent of Clusterpoint.</li>
								<li>Make copies of the Program except of one back up copy.</li>
								<li>Carry out activities which might be detrimental to the operation of Clusterpoint including but not limited to causation of damages to Clusterpoint.</li>
								<li>Offer services similar to or resembling database–as–a–service provided by Clusterpoint.</li>
								<li>Use the Program for illegal purposes.</li>
							</ul></p>

							<p>As far as possible, You shall ensure that the above mentioned activates are not carried out by other persons.</p>

							<p>You are also obliged to immediately inform Clusterpoint about occurrence of any above described restrictive activities which You know or should have known about.</p>

							<h2>Trade Marks, Design and Patents</h2>

							<p>You are not granted any rights to the trade marks, designs and/or patents related to the Program or any rights to register or submit for registration trademarks, designs and/or patents related to the Program in Your own name or on behalf of any other person, unless You have received prior written consent from Clusterpoint.</p>

							<p>You are not allowed to use, submit for registration or register trademarks, patents and/or design which might mislead regarding, inter alia, Your rights to Program, origin of Your product or Your relationship with Clusterpoint, including use of the aforementioned as a part of Your product or service name, Your company name or domain name.</p>

							<p>Clusterpoint reserves the right to register all trademarks, designs, and/or patents and make unfettered use of any and all trademarks, designs and patents associated with the Program whether such exist and have been registered in any jurisdiction on the effective date of this Agreement or not.</p>

							<p>You shall do nothing during or after the termination of this Agreement, which may adversely affect the validity or enforceability of Clusterpoint’s trademarks, designs and/or patents or which may restrict Clusterpoint’s right to freely make use of and to gain the benefit of any trademarks, designs and /or patents.</p>

							<p>You shall immediately inform Clusterpoint about any improper, illegal or wrongful use of the trademarks, designs and/or patents.  Pursuant to a written request by Clusterpoint and at Clusterpoint’s cost, You shall assist in taking all steps to defend the rights of Clusterpoint including any actions which Clusterpoint may deem necessary to commence for the protection of any of its rights in respect of the trademarks, designs and/or patents.


							<h2>Effective Date</h2>

							<p>In order to acquire the rights to use Program, You have to register Your account with Clusterpoint at <a href=" https://www.clusterpoint.com"> https://www.clusterpoint.com</a>.</p>
							<p>Within the process of registration of Your account with Clusterpoint, You have to accept this Agreement as binding to You. Upon Your acceptance of this Agreement, Clusterpoint will send to Your e-mail address (as provided in Your registration information) an activation link.</p>
							<p>This Agreement will become effective as soon as You follow the link sent to Your e-mail by clicking on the link.

							<h2>Term and Termination of the Agreement</h2>

							<p>This Agreement has been concluded for an indefinite period of time.</p>

							<p>If either Party breaches a material term of this Agreement and fails to correct the breach within 15 (fifteen) days of receipt of written notice of the breach from the other Party, the Party who sent the notice shall be entitled to terminate this Agreement with immediate effect.</p>

							<p>In the event of termination of the Agreement as provided in this Section of the Agreement, You must immediately stop using the Program and delete all copies of the Program and provide Clusterpoint with a written certification of such deletion and destruction.</p>

							<p>Provisions that survive termination of the Agreement are those relating to limitation of liability and others which by their nature are intended to survive the termination of the Agreement.


							<h2>Third Party Software</h2>

							<p>Program may contain third party proprietary programs that are either licensed or supplied for distribution and delivery under separate terms and conditions that are different from those which are set out in this Agreement. The Program may also contain third party open source software that Clusterpoint licenses under terms and conditions of Clusterpoint’s this Agreement. All such terms and conditions which may be binding You are published on the following Clusterpoint website <a href="https://www.clusterpoint.com/docs/4.0/374/3rdpartylicenses">https://www.clusterpoint.com/docs/4.0/374/3rdpartylicenses</a>. You have a duty read the information published on the aforementioned website before You download the Program.</p>

							<p>If, pursuant to the information published on the aforementioned Clusterpoint website, You have to obtain a license from a third person to use the Program, it is Your duty to receive such license before You download the Program.


							<h2>Open Source License Restrictions</h2>

							<p>Program is not an open source software.</p>

							<p>Considering that open source license terms may impose certain obligations with regards to a computer code, You shall not engage in any activities, including, but not limited to, incorporation, modification, combination and/or distribution of the Program code (or any intellectual property associated therewith) with any other code in a way which would subject Program code (or any intellectual property associated therewith) to any open source license terms.

							<h2>Assignment</h2>

							<p>You shall not assign this Agreement and liabilities and rights arising from the Agreement, as well as sell, assign, rent, lease, lend, host or timeshare or make the Program available to any other person or for the benefit of any other person in other manner or enter into this Agreement on behalf of or in the interests of any person unless You are expressly permitted so by this Agreement or You have received prior acceptance in writing from Clusterpoint.</p>

							<h2>Program Documentation </h2>

							<p>You will have access to Program documentation at the following Clusterpoint website <a href="https://www.clusterpoint.com/docs">https://www.clusterpoint.com/docs</a>.</p>

							<h2>Fixes, Updates and Patches</h2>

							<p>Unless Program fixes, updates and patches are released by Clusterpoint generally to all users of Clusterpoint Program, You may receive fixes, updates and patches as a part of Technical Support.</p>

							<p>Clusterpoint is not obliged to release and provide Program fixes, updates and patches.</p>

							<p>Fixes, updates and patches are licensed based on the same license terms and conditions as the Program.

							<h2>Warranty</h2>

							<p>To the extent permitted by law, Clusterpoint expressly denies any warranty, assurance and representation which is not expressly and unambiguously provided for in this Agreement, including, but not limited to, any and all warranties, assurances and representations with regard to ownership rights and intellectual property ownership rights and non-infringement thereof, uninterrupted and error free work, merchantability, satisfactory quality, use of care and skill, performance within a certain time and ability of Clusterpoint to fix any and all Program errors.</p>

							<h2>Limitation of Liability</h2>

							<p>Regardless of the legal basis for Your damages claim against Clusterpoint, to the maximum extent permitted by law, liability of Clusterpoint will be limited to direct damages caused to You in the aggregate up to Euro 10 (ten Euro).</p>

							<p>Neither Party shall be liable for any indirect, incidental, special, punitive or consequential damages, or any loss of profits, revenue, data or data use or any other damages, unless liability for such damages is explicitly provided for by this Agreement. This limitation of liability does not apply to the claims raised by Clusterpoint or on behalf of Clusterpoint if You have engaged in activities which have negatively affected Clusterpoint and You knew or You should have known that such activities could have a negative effect on Clusterpoint.</p>

							<p>These provisions on limitation of liability do not apply to the situations as provided in the “Defense” section of this Agreement.

							<h2>Defense</h2>

							<p>If a claim or accusation is made against You and such claim or accusation is based on an allegation that the Program breaches intellectual property rights or rights to a commercial secret of the claimant, Clusterpoint will defend You against such claim or accusation and will compensate to You amounts corresponding to any adverse final judgment or settlement, provided that Clusterpoint has agreed to such settlement in advance in writing.</p>

							<p>Defense and compensation will only be provided to You if You:
								<ul>
									<li>immediately inform Clusterpoint about any such claim or accusation;</li>
								<li>pursuant to a written request from Clusterpoint, provide Clusterpoint with sole control of the management of the Your defense or conclusion of settlement;</li>
								<li>do not interfere with the management of Your defense or conclusion of settlement and, as far as possible and pursuant to a request by Clusterpoint, provide assistance in the management of Your defense;</li>
								<li>have not directly or indirectly caused the claim or accusation, including, but not limited to that claim or accusation not being caused by You combining the Program with other programs or hardware, Your distribution of the Program to third persons, Your failure to stop use of the Program pursuant to a respective demand by Clusterpoint, or Your failure to obtain the necessary licenses or permits to deliver and distribute or use the Program.</li></ul></p>

									<h2>Confidentiality</h2>

							<p>As a result of this Agreement Parties may have had access to information which is deemed to be a Trade Secret of the other Party.</p>

							<p>Neither Party shall disclose a Trade Secret of other Party during the term of this Agreement or for a period of five years after the term of this Agreement, except where the information lawfully becomes known to the Party without it knowing that the information is a Trade Secret, or  the information lawfully becomes publicly known, or the information is  lawfully received from a third person without an obligation to keep it confidential, or the information is lawfully requested by   government officials and an obligation to   disclose the information becomes legally binding upon the Party.</p>

							<p>To the extent necessary to implement the provisions of this Agreement each Party may disclose the Trade Secret to such of its employees as may be reasonably necessary. Before any disclosure of the Trade Secret, each Party shall make such employees aware of the obligations of confidentiality under this Agreement and shall at all times ensure compliance by such employees with the confidentiality provisions set out in this Agreement.</p>

							<p>If a Party violates the confidentiality provisions and discloses confidential information and the disclosure of the confidential information results in damages to the other Party, the Party at fault shall pay a penalty in the amount of Euro 10 000 (ten thousand Euro). If the Party in question can prove that its damages exceed the aforesaid amount, the Party may claim damages in excess of the aforesaid amount.

							<h2>Force majeure</h2>

							<p>Force Majeure shall mean any event beyond the reasonable control of Parties and which is unavoidable notwithstanding the reasonable care of the Party affected.</p>

							<p>If either Party is affected in performing any of its obligations under the Agreement by an event of Force Majeure, then it shall notify the other Party in writing of the occurrence of such event within 14 (fourteen) days after the occurrence of such event.</p>

							<p>The Party which has given such notice shall be excused from the performance or punctual performance of its obligations under the Agreement for so long as the relevant event of Force Majeure continues and to the extent that such Party’s performance is affected.  The time for completion of obligation under the Agreement shall be extended until the end of even of Force Majeure.</p>

							<p>The Party or Parties affected by the event of Force Majeure shall use reasonable efforts to mitigate the effect thereof upon its or their performance of the Agreement and to fulfill its or their obligations under the Agreement, but without incurring a right to terminate the Agreement.

							<h2>Audit</h2>

							<p>On at least 5 (five) days’ prior written notice to You, Clusterpoint is entitled at its own costs to carry out an audit of You for the purpose of ascertaining compliance with   the terms and conditions of this Agreement.</p>

							<p>You undertake to cooperate with Clusterpoint during the audit and to provide and ensure access to information required for the audit including Your financial documents.</p>

							<p>Clusterpoint’s right to carry out Your audit shall survive the termination of this Agreement.

							<h2>Notices</h2>

							<p>Any notice, request or other information to be given under this Agreement shall be prepared in writing and sent by registered mail, or by courier (receipt requested) to the Parties at their respective addresses.</p>

							<p>Your address is provided in Your account with Clusterpoint. You undertake to immediately inform Clusterpoint about the change of address by making respective amendments in Your account with Clusterpoint.</p>

							<p>Clusterpoint’s address is available on the following website <a href=" https://www.clusterpoint.com"> https://www.clusterpoint.com</a>. Clusterpoint undertakes to immediately publish information about the change of its address on the aforementioned website. You are obliged to review content of the aforementioned website to find out information about the address of Clusterpoint.

							<h2>Entire Agreement</h2>

							<p>This Agreement constitutes the entire agreement between the Parties and supersedes any other prior communication between the Parties.</p>

							<p>This Agreement may be amended based on the mutual agreement of the Parties. Amendments must be in writing and accepted by both Parties.

							<h2>Other</h2>

							<p>In the event that any of the provisions of this Agreement are or become invalid, the validity of the other provisions of this Agreement shall not be affected by the invalid provision. In such case, the invalid provision shall be deemed replaced by its legally valid interpretation which comes as close as possible to the intentions of the Parties as contemplated by this Agreement reflecting the economic purpose and effect of the invalid provision.</p>

							<p>The Parties hereto agree to execute such other documents and to take such other action as may be reasonably necessary to further the purposes of this Agreement or exercise the rights contained in this Agreement.</p>

							<p>This Agreement shall be binding upon the Parties and their respective successors.</p>

							<p>This Agreement and the rights and obligations hereunder may not be assigned or otherwise transferred to other person by any Party in any manner without the prior written consent of the other Party.</p>

							<p>This Agreement shall be governed by the laws of the Republic of Latvia.</p>

							<p>Any dispute, controversy or claim arising out of or relating to this Agreement, or the breach, termination or invalidity thereof, shall be settled in the court of the Republic of Latvia applying the laws of the Republic of Latvia.</p>

							<p>Clusterpoint is entitled to send commercial communication to Your e-mail from time to time. You are entitled to opt-out from receiving further commercial communication by following opt-out procedure provided in respective commercial communication.

							<p><a href="#page-services-agreement" class="pull-right">Go to the top of the page</a></p>
							</div>
						</div><?php /* End col-md-10 */ ?>
					</div><?php /* End row */ ?>
					<div id="Clusterpoint-Cloud-Services-Agreement" class="row hidden_panel panel_container">
						<div class="col-lg-8 col-md-12 center-block el-animation-2">
							<div>
							<h2>Cloud Services Agreement</h2>

							<p>Version 1.1.</p>

							<h2>1. Definitions</h2>
							<p><em>Agreement</em> – this Cloud Services Agreement, made available by Clusterpoint at <a href="https://www.clusterpoint.com/cloud-services-agreement-and-clusterpoint-license-agreement">https://www.clusterpoint.com/cloud-services-agreement-and-clusterpoint-license-agreement</a>.</p>
							<p><em>You</em> – the customer that registered an account in Clusterpoint Cloud Services and other users that received sub-accounts from this customer.</p>
							<p><em>Clusterpoint</em> – SIA “Clusterpoint”, reg.no. 40003850104, having a legal address at Lāčplēša street 20a, Riga, LV-1011, Latvia, registered and operating under the laws of the Republic of Latvia.</p>
							<p><em>Party, Parties</em> – You and Clusterpoint are jointly referred to as Parties, and separately as Party.</p>
							<p><em>Clusterpoint Affiliates</em> – subsidiaries of Clusterpoint that could be involved in providing Cloud Services and/or Technical Support of Cloud Services.</p>
							<p><em>Cloud Services</em> – remote servers and software network that allow centralized data storage and online access to computing services or resources provided by Clusterpoint as described at <a href=" https://www.clusterpoint.com"> https://www.clusterpoint.com</a>, including Technical Support. The description of the Cloud Services as provided at the aforementioned website forms an integral part of this Agreement.</p>
							<p><em>Data Subject</em> – an identified or identifiable natural person, who can be identified, directly or indirectly, in particular by reference to an identification number or to one or more factors specific to his physical, physiological, mental, economic, cultural or social identity.</p>
							<p><em>Personal Data</em> - any information relating to Data Subject.</p>
							<p><em>Data</em> – all data, text, files, images, graphic illustrations, information, photographs, audio, video and other materials, including Personal Data, in any form whatsoever provided by You to Clusterpoint within Your use of Cloud Services.</p>
							<p><em>Directive </em>- Directive 95/46/EC of the European Parliament and of the Council of 24 October 1995 on the protection of individuals with regard to the processing of personal data and on the free movement of such data.</p>
							<p><em>Force Majeure</em> - any event beyond the reasonable control of Parties and which is unavoidable notwithstanding the reasonable care of the Party affected.</p>
							<p><em>Price List</em> – Cloud Services prices made available by Clusterpoint at <a href=" https://www.clusterpoint.com"> https://www.clusterpoint.com</a>.</p>
							<p><em>Technical Support</em> – technical support provided by Clusterpoint as described at:  <a href="https://www.clusterpoint.com/docs/4.0/392/support-options">https://www.clusterpoint.com/docs/4.0/392/support-options</a>. The description of the Technical support as provided at the aforementioned website forms an integral part of this Agreement. The description at the aforementioned website may be altered by Clusterpoint at its own discretion without Your approval.</p>
							<p><em>Cloud Environment</em> – hardware and software components owned and/or licensed and/or managed by Clusterpoint to which You may be granted access by Clusterpoint as part of Cloud Services provided to You.</p>
							<p><em>Trade Secret</em> – information which has been designated by its author or holder as a trade secret or which, because of its nature or circumstances surrounding its disclosure, should be treated as a trade secret, even though it has not been designated as a trade secret.</p>

							<h2>2. Scope of Agreement</h2>
							<p>This Agreement applies to Cloud Services, including the processing of Data within provision of Cloud Services.</p>

							<h2>3. Effective Date</h2>
							<p>In order to acquire Cloud Services, You have to register Your account with Clusterpoint at <a href=" https://www.clusterpoint.com"> https://www.clusterpoint.com</a>.
							<p>Within the process of registration of Your account with Clusterpoint, You have to accept this Agreement. Upon Your acceptance of this Agreement, Clusterpoint will send to Your e-mail address (as provided in Your registration information) an activation link of Your account.
							<p>This Agreement will become effective as soon as You activate Your account by following the link sent to Your e-mail.</p>

							<h2>4. Your Rights and Obligations</h2>
							<p>During the term of this Agreement and provided that You have fulfilled Your payment obligations, You have a worldwide right to access and use Cloud Services which You have acquired from Clusterpoint to the extent, in the manner and for the duration set forth in this Agreement and websites referenced to in this Agreement.</p>
							<p>You have a right to access and use Cloud Services for Your internal business or private operations only.</p>
							<p>You can select amount of necessary Cloud Services via Your account. This Agreement will apply to any subsequent purchase of additional amount of Cloud Services, unless You are required by Clusterpoint to conclude a new agreement.</p>
							<p>You are solely responsible for the content of Data. You shall use commercially reasonable efforts to secure Data without violating the rights of any third party or otherwise obligating Clusterpoint to You or to any third party. You shall implement reasonable and appropriate measures designed to secure Data against accidental or unlawful loss, access or disclosure. When accessing or using Cloud Services outside European Union and European Economic Area, You shall ensure Personal Data protection in accordance with this Agreement.</p>
							<p>You are responsible for maintaining the confidentiality of authentication credentials associated with Your use of Cloud Services. You must immediately inform Clusterpoint of any possible misuse of your authentication credentials or any security issues related to Cloud Services.</p>
							<p>You are responsible for ensuring that any person which may access Cloud Service as a result of Your actions (activities or failure to act), including but not limited to the users which have received sub-accounts from You, comply with terms and conditions of this Agreement and applicable legislation. You are responsible for immediate notification of change of Your contact person that is in charge of Your account in Cloud Services to Clusterpoint. If You fail to immediately notify change of Your contact person in charge of Your account in Cloud Services, You shall bear full responsibility for Data and payments to Clusterpoint.
							<p>You may provide access to Your account in Cloud Services to individual employees of Clusterpoint for provision of certain technical support of Cloud Services. Clusterpoint will ensure that the aforementioned persons will comply with the terms and conditions of this Agreement and applicable legislation when accessing Your account in Cloud Services.</p>
							<p>You may assign this Agreement either in whole or in part on one month’s prior written notice to Clusterpoint. Once the Agreement is assigned, Your authentication credentials will be revoked by Clusterpoint and the assignee will have to create its own authentication credentials with Clusterpoint.</p>

							<h2>5. Clusterpoint Rights and Obligations</h2>
							<p>Clusterpoint shall provide Cloud Services to You in accordance with terms and conditions of this Agreement in a professionally diligent manner.</p>
							<p>Clusterpoint shall use commercially reasonable efforts to make Cloud Services (excluding Technical Support) available 24 hours per day, 7 days per week, except for planned downtime for technical purposes and unavailability caused by Force Majeure circumstances.</p>
							<p>Clusterpoint shall use commercially reasonable efforts to make basic Technical Support available on a best effort basis, except for planned downtime for technical purposes and unavailability caused by Force Majeure circumstances.</p>
							<p>If You opted-in for enhanced Technical Support (other than basic), Clusterpoint shall use commercially reasonable efforts to make Technical Support available 24 hours per day, 7 days per week, except for planned downtime for technical purposes and unavailability caused by Force Majeure circumstances.
							<p>Clusterpoint shall implement reasonable and appropriate measures designed to help You secure Data against accidental or unlawful loss, access or disclosure. Clusterpoint shall not be responsible for Data security if You fail to immediately notify change of Your contact person that is in charge of Your account in Cloud Services.</p>
							<p>Clusterpoint is entitled to use subcontractors for provision of Cloud Services. Subcontractors shall ensure the same level of protection of Data as Clusterpoint. Clusterpoint shall publish information about the use of such subcontractors, if any, at www.clusterpoint.com.</p>
							<p>Clusterpoint shall ensure that no Clusterpoint employee has access to Data, unless You have provided access to such Clusterpoint employee via Your account for provision of certain Technical Support.</p>

							<h2>6. Changes to Cloud Services</h2>
							<p>Clusterpoint is entitled to unilaterally alter pricing policies for Cloud Services. Clusterpoint will send a respective notification to Your e-mail address (as provided in Your registration information) in advance. Pricing alteration will not apply to Cloud Service which You have already been charged for by Clusterpoint in accordance with this Agreement. Pricing alteration will become effective at the date provided in such notification.</p>
							<p>Clusterpoint is entitled to unilaterally alter Cloud Services, including changes to Cloud Environment and Technical Support, security, configurations, application features at any time without prior notification. Such changes will not adversely affect the availability of Cloud Service to You.</p>

							<h2>7. Trial Period</h2>
							<p>Upon registration of Your account in Cloud Services and for one month from Effective Date, Clusterpoint grants You a trial period to use Cloud Services as set out at <a href=" https://www.clusterpoint.com"> https://www.clusterpoint.com</a> for one month without charge. Trial period is granted solely upon first registration and may not be received for a second time (e.g. in case of repeated registration).</p>

							<h2>8. Suspension of Your Account</h2>
							<p>Clusterpoint is entitled to temporarily suspend Your account in Cloud Services either in whole or in part in case of breach of terms of this Agreement or if it is reasonably needed to prevent unauthorized access to Data or if required to do so by law.</p>
							<p>Suspension of Your account in Cloud Services shall not excuse You from Your obligations under this Agreement (e.g., payment obligations).</p>
							<p>If Your account in Cloud Services is suspended due to breach of terms of this Agreement (except for breach of payment terms) and You do not remedy the breach within the term provided in suspension notice by Clusterpoint, Clusterpoint is entitled to terminate this Agreement without prior notice.</p>
							<p>If Your account in Cloud Services is suspended due to breach of payment terms of this Agreement and You do not remedy the breach within one month from suspension date, Your actions via Your account in Cloud Services will be restricted only to exporting of Data from Cloud Services. If You do not remedy the breach within two months from suspension date, You will have no access to Data via Your account. If You do not remedy the breach within three months from suspension date, Clusterpoint will be entitled to terminate this Agreement.</p>

							<h2>9. Ownership and Restrictions</h2>
							<p>You shall retain all ownership and intellectual property rights in and to Data. Clusterpoint is not granted any rights, title or interest in and to the Data.</p>
							<p>Clusterpoint reserves all rights, title and interest in and to Cloud Services and Cloud Environment, including all related intellectual property rights. No rights are granted to You other than expressly set forth under this Agreement.</p>
							<p>You are neither granted any license to the components of Cloud Environment and Cloud Services, nor are the components of the Cloud Environment and Cloud Services sold to You.</p>
							<p>You are not granted any rights to the trademarks, designs and/or patents related to the Cloud Services or Cloud Environment or any rights to register or submit for registration trademarks, designs and/or patents related to the Cloud Services or Cloud Environment in Your own name or on behalf of any other person, unless You have received prior written consent from Clusterpoint.</p>
							<p>You are not allowed to use, submit for registration or register trademarks, patents and/or design which might mislead regarding, inter alia, Your rights to Cloud Services and/or Cloud Environment, origin of Your product or Your relationship with Clusterpoint, including use of the aforementioned as a part of Your product or service name, Your company name or domain name.</p>
							<p>Clusterpoint reserves the right to register all trademarks, designs, and/or patents and make unfettered use of any and all trademarks, designs and patents associated with the Cloud Services and/or Cloud Environment whether such exist and have been registered in any jurisdiction on the Effective Date or not.</p>
							<p>You shall do nothing during or after the termination of this Agreement, which may adversely affect the validity or enforceability of Clusterpoint’s trademarks, designs and/or patents or which may restrict Clusterpoint’s right to freely make use of and to gain the benefit of any trademarks, designs and /or patents.
							<p>You shall not:
							<p>- use the Cloud Service in a manner contrary to what is set out in this Agreement;
							<p>- cause or engage in reverse engineering, de-compilation, disassembly of the components of Cloud Environment unless such rights are directly granted to You by Clusterpoint or by law;
							<p>- split or separate components of the Cloud Environment, including but not limited to splitting or separating components of the Cloud Environment with a view to operating them on hardware units or software or distribution to other persons;
							<p>- remove or modify any markings or notices attached to or accompanying deliverables of the Cloud Service or to the components of the Cloud Environment, including but not limited to notice of Clusterpoint as owner of the components of Cloud Environment;
							<p>- carry out activities which may be detrimental to the operation of Clusterpoint, including but not limited to causation of damages to Clusterpoint, including access or use of Cloud Services and/or Cloud Environment in order to build or support, and/or assist a third party in building or supporting, products or services competitive to Clusterpoint;
							<p>- make the programs or materials resulting from the Cloud Services (excluding Data) available to any third party for the use in its business operations, unless expressly permitted by Clusterpoint;
							<p>- license, sell, rent, lease, transfer, distribute, host, outsource, permit timesharing or otherwise commercially exploit or make available the Cloud Service or components of the Cloud Environment to any third party, other than as expressly permitted pursuant to this Agreement or by Clusterpoint;
							<p>- use Cloud Services for illegal purposes.</p>
							<p>You shall take all reasonable measures to ensure that other person shall not conduct the above mentioned activities as the result of Your actions (activities or failure to act) and if You become aware of any such activities You shall without delay inform Clusterpoint.</p>
							<p>Clusterpoint employees have access to statistical data regarding Data (e.g., amount of Data transferred or stored in cloud), but do not have access to Data itself. Access to Data is only possible via Your account. Clusterpoint may only delete all Data stored in Cloud Services.</p>

							<h2>10. Personal Data</h2>
							<p>Clusterpoint employees do not have access to Data, therefore You are responsible for protection of Personal Data under requirements of Directive and applicable national law. You are responsible for receiving data processing consent from Data Subject, including consent to transfer Personal Data to a third person and to transfer Personal Data outside European Union and European Economic Area (provided that protection of Personal Data meets requirements of Directive and applicable national law). Any request of Data Subject in accordance with the rights granted by Directive or applicable national law on Personal Data protection shall be executed by You, because only You can access Data via Your account in Cloud Services.</p>
							<p>Clusterpoint, Clusterpoint Affiliates and subcontractors shall use commercially reasonable efforts to ensure an adequate level of protection of Personal Data that is consistent with the requirements of Directive or applicable national law. Clusterpoint shall use commercially reasonable efforts to ensure Your access to Data via Your account in Cloud Services to comply with requirements of Directive or relevant national law on Personal Data protection.</p>

							<h2>11. Charges and Payments</h2>
							<p>There is certain amount of Cloud Services provided to You monthly free of charge. The exact amount of free Cloud Services is published on <a href=" https://www.clusterpoint.com"> https://www.clusterpoint.com</a>.   If You exceed the amount of provided monthly free Cloud Services, Clusterpoint shall charge You for the exceeded amount in accordance with prices provided in Price List.
							<p>All charges provided in Price List are exclusive of applicable taxes and duties (e.g. VAT or other sales tax). Clusterpoint is entitled to withhold applicable taxes and duties, unless You provide sufficient evidence of exemption from applicable taxes or duties.</p>
							<p>You shall pay to Clusterpoint by wire transfer to the bank account set out in the invoice issued by Clusterpoint to You within 30 (thirty) days from the date of the invoice. Clusterpoint shall send invoice to You electronically to the e-mail address (as provided in Your registration information). Electronic invoices are valid without a signature.</p>
							<p>Alternatively, You shall pay to Clusterpoint by payment with Your credit card via Your account in Cloud Services. If You will use this payment option, You shall make payment at the end of month. You shall have an opportunity to receive electronic invoices via Your account. Electronic invoices are valid without a signature. You shall bear full responsibility for use of Your credit card and You represent and warrant that You are entitled to use Your credit card.</p>
							<p>If You fail to immediately notify a change of Your contact person who is in charge of Your account in Cloud Services, Clusterpoint shall not cancel Cloud Services used by a person acting under the apparent authority of You, and You shall be bound by any usage of Cloud Services done by such person.</p>
							<p>Clusterpoint may charge you interest at the rate of 0,06% (six hundredths of one per cent) of outstanding amounts daily, but not exceeding 100% (one hundred percent) of the outstanding amount.</p>
							<p>If Your payment is delayed for more than a month, Clusterpoint is entitled to suspend Your account in Cloud Services.</p>

							<h2>12. Refund</h2>
							<p>If You are a consumer within the meaning of Latvian consumer protection legislation, You are entitled to a refund in accordance with provisions of Latvian Consumers’ Rights Protection Law.</p>

							<h2>13. Confidentiality</h2>
							<p>As a result of this Agreement Parties may have had access to information which is deemed to be a Trade Secret of the other Party.</p>
							<p>Neither Party shall disclose a Trade Secret of other Party during the term of this Agreement or for a period of five years after the term of this Agreement, except where the information lawfully becomes known to the Party without it knowing that the information is a Trade Secret, or  the information lawfully becomes publicly known, or the information is  lawfully received from a third person without an obligation to keep it confidential, or the information is lawfully requested by   government officials and an obligation to disclose the information becomes legally binding upon the Party.</p>
							<p>To the extent necessary to implement the provisions of this Agreement each Party may disclose the Trade Secret to such of its employees as may be reasonably necessary. Before any disclosure of the Trade Secret, each Party shall make such employees aware of the obligations of confidentiality under this Agreement and shall at all times ensure compliance by such employees with the confidentiality provisions set out in this Agreement.</p>

							<h2>14. Indemnification</h2>
							<p>You will defend, indemnify, and hold harmless Clusterpoint and Clusterpoint Affiliates, and each of their respective employees, officers, directors, and representatives from and against any claims, damages, losses, liabilities, costs, and expenses arising out of or relating to any third party claim concerning Data.</p>
							<p>If Clusterpoint or Clusterpoint Affiliates are obligated to respond to a third party claim or other compulsory legal order or process described above, You will also reimburse Clusterpoint for reasonable attorneys’ fees, as well as employees’ and contractors’ time and costs arising from responding to the third party claim or other compulsory legal order or process.</p>

							<h2>15. Disclaimers</h2>
							<p>The Clusterpoint Cloud Services are provided “as is”. Clusterpoint and Clusterpoint Affiliates make no representations or warranties of any kind, whether express, implied, statutory or otherwise regarding Cloud Services, including any warranty that Cloud Services will be uninterrupted, error free or free of harmful components, or that any content, including Data or third party content, will be secure or not otherwise lost or damaged. Except to the extent prohibited by law, Clusterpoint and Clusterpoint affiliates disclaim all warranties, including any implied warranties of merchantability, satisfactory quality, fitness for a particular purpose, non-infringement, and any warranties arising out of any course of dealing or usage of trade.</p>

							<h2>16. Limitation of Liability</h2>
							<p>Regardless of the legal basis for Your damages claim against Clusterpoint, to the maximum extent permitted by law, liability of Clusterpoint will be limited to direct damages caused to You in the aggregate up to the amount that Clusterpoint has received in relation to Cloud Services giving rise to the basis for the claim.</p>
							<p>Neither Party shall be liable for any indirect, incidental, special, punitive or consequential damages, or any loss of profits, revenue, data or data use or any other damages, unless liability for such damages is explicitly provided for by this Agreement. This limitation of liability does not apply to the claims raised by Clusterpoint or on behalf of Clusterpoint if You have engaged in activities which have negatively affected Clusterpoint and You knew or You should have known that such activities could have a negative effect on Clusterpoint.</p>

							<h2>17. Term and Termination</h2>
							<p>The term of this Agreement shall commence on Effective Date and will remain in effect until terminated by either Party.</p>
							<p>You may terminate this Agreement without cause at any time by closing Your account in Cloud Services. If You terminate this Agreement, Clusterpoint shall ensure that You can export Data from Cloud Services within one month after termination of this Agreement.</p>
							<p>Clusterpoint may terminate this Agreement without cause on one month’s prior notice to You or with cause if provided in this Agreement.
							<p>Upon termination of this Agreement, Clusterpoint shall store Data for one month and then permanently delete all Data stored.</p>
							<p>All proprietary rights, payment, indemnification, limited liability, governing law and jurisdiction clauses of this Agreement shall survive termination.</p>

							<h2>18. Miscellaneous</h2>
							<p>If any part of this Agreement will be held legally void, the rest will remain in full force and effect.</p>
							<p>Failure to enforce any provisions of this Agreement will not constitute a waiver of rights.</p>
							<p>This Agreement shall be governed by the laws of the Republic of Latvia, without regard to its conflict of laws principles.</p>
							<p>Any dispute regarding this Agreement shall be settled by means of negotiations between Parties, but, if it is not possible, the action must be brought before the court of the Republic of Latvia.</p>

							<p><a href="#page-services-agreement" class="pull-right">Go to the top of the page</a></p>
						</div>
						</div><?php /* End col-md-10 */ ?>
					</div><?php /* End row */ ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End single-content */ echo "\n"; ?>	
			
		</div><?php /* End page-onboarding-services */ echo "\n"; ?>