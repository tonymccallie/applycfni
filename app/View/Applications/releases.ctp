<div class="span12">
	<h2>Step 7: Releases</h2>
	<?php 
		echo $this->Form->create();
			echo $this->Form->input('id',array());
	?>
	<div class="row-fluid">
		<h4>Standards</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<p>I have read the <a href="#objectivesandstandards" data-toggle="modal">"Objectives & Standards"</a> and <a href="#statementoffaith" data-toggle="modal">"Statement of Faith"</a> of Christ For The Nations Institute. I accept them, including observance of the specific standards of conduct stated therein, while being a student of Christ For The Nations Institute.</p>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->checkbox('standards_release',array('label'=>'I agree','type'=>'checkbox')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Criminal Background Check</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<p>All applicants are required by CFNI policies and procedures to submit to a standard background check.  CFNI takes seriously our obligation to provide an atmosphere of safety for those to whom we minister.  This would especially be true regarding young people and children.  We appreciate your willingness to comply and ask that you embrace with us the desire and the responsibility to provide this important level of safety. </p>
			<p>I hereby authorize Christ for the Nations, Inc. and its contracted third parties, to research character, general reputation, personal characteristics, and mode of living, as well as my driving record and/or criminal history, to be included in an applicant profile.  I release and hold Christ for the Nations, Inc. and its contracted third parties, including but not limited to, it’s respective officers, directors, and employees harmless from any and all liability with respect to the investigation, verification and or use of any information relevant to my application for enrollment. </p>
			<p>I authorize and request any present or former employer, state/federal government office, state department of motor vehicles, school, police department, court records, including those maintained by both public and private organizations, or other persons having personal knowledge about me to furnish Christ for the Nations, Inc. and its contracted third parties with any and all information in their possession regarding me for the purposes of confirming the information contained in my application.  </p>
			<p>I certify that the information contained on this form is true, correct and complete to the best of my knowledge.  I understand that CFNI enrollment requires criminal history and/or driving record background checks for the purpose of evaluating me for enrollment and continued enrollment.  I also understand that any misrepresentations, falsification or omission of the facts herein may be grounds for disqualification or expulsion.  </p>
			<p>I authorize Christ For The Nations Inc.  to make any investigation of my personal history through any investigative agencies of their choice.</p>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->checkbox('background_check',array('label'=>'I Agree','type'=>'checkbox')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Application Completion</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<p>I hereby agree the information I have provided in this application is true. I further understand that if I have overlooked a question, or failed to complete any part of the application form, the review process of my application may be delayed. This may result in me having to wait until the following semester to attend. </p>
			<p>Note:  If you are under 18 years of age, a Parent or Legal guardian must sign this application and must also complete the "Minor Release" form before the application can be processed.  After you have submitted your application, please contact a CFNI Enrollment Services Advisor.  </p>
		</div>
		<div class="span6">
			<?php echo $this->ExtendedForm->checkbox('truthful_release',array('label'=>'I Agree','type'=>'checkbox')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<h4>Electronic Signature</h4>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<p>The form will not be "signed" in the sense of a traditional paper document. To verify the contents of the above, the signatory must enter any alpha/numeric character(s) or combination thereof of his or her choosing, preceded and followed by the forward slash (/) symbol. Christ for the Nations, Inc does not determine or pre-approve what the entry should be, but simply presumes that this specific entry has been adopted to serve the function of the signature. Most signatories simply enter their names between the two forward slashes, although acceptable "signatures" could include /john doe/; /jd/; or /123-4567/.</p>
		</div>
		<div class="span6">
			<?php echo $this->Form->input('signature_name',array('label'=>'Full Name','class'=>'span12')); ?>
			<?php echo $this->Form->input('signature_phone',array('label'=>'Phone Number','class'=>'span12')); ?>
			<?php echo $this->Form->input('signature_signature',array('label'=>'Signature (Full Name) <a href="#" class="labeltooltip" data-toggle="tooltip" data-placement="top" title data-original-title="By signing this form digitally, and submitting this form you are agreeing to all statements, policies, and terms stated within this application  ."><i class="icon-question-sign"></i></a>','class'=>'span12')); ?>
			<?php echo $this->Form->input('signature_date',array('label'=>'Date of Signature','class'=>'span4','empty'=>true,'type'=>'date')); ?>
		</div>
	</div>
	<div class="btn-group pull-right">
	<?php
		echo $this->Html->link('Back',array('action'=>'recommendations'),array('class'=>'btn btn-large pull-left','div'=>false));
		echo $this->Form->submit('Next',array('class'=>'btn btn-inverse btn-large','div'=>false));
	?>
	</div>
	
	
	
	
	
	<?php echo $this->Form->end(); ?>
</div>
	
	
	
	
	
	<!-- Statement of Faith Modal -->
	<div id="objectivesandstandards" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Objectives & Standards</h3>
	  </div>
	  <div class="modal-body">
		<p>Christ For the Nations exists for the purpose of providing biblical training for Christian discipleship and leadership. CFNI is a non-denominational, spirit-filled Bible school with fundamental roots. Spiritual education in these Christian traditions involves not only intensive Bible study under a proficient faculty but also a practical ministry experience for each student and the development of sound discipline in the student’s personal life. For the accomplishment of this last goal, the institute requires that each student, as a condition of his/her admission, agree to the following for the entire time of his/her enrollment at the institute.<p>
	<ul> 
		<li>
			1. To be familiar with and abide by the requirements published in the CFNI Student Handbook and such amendments as may be made from time to time, by announcement or otherwise.
		</li>
		<li>
			2. To live in a spirit of good campus citizenship, showing consideration and respect for the personal freedom and rights of others.
	 	</li>
		<li>
			3. To observe with special care the following standards of personal behavior, whether or not the student agrees with the institute as to the relationship of these things to a consecrated Christian life:
			<ul>
				<li>
					a. To refrain from the use or possession of alcoholic beverages, tobacco, narcotics and hallucinogenic drugs, and from gambling and social dancing.
				</li>
				<li>
					b. To exercise mature Christian judgment in regard to reading matter, movies, Internet sites, and other forms of entertainment, taking into consideration the standards of the Scriptures: Therefore, “Come out from among them and be separate, says the Lord. Do not touch what is unclean, and I will receive you. I will be a Father to you, and you shall be my sons and daughters, says the LORD Almighty.” Therefore, having these promises, beloved, let us cleanse ourselves from all filthiness of the flesh and spirit, perfecting holiness in the fear of God (II Cor. 6:17 - 7:1).
				</li>
				<li>
					c. To adhere to the dress code as stated in the CFNI handbook.
				</li>
	 		</ul>
		</li>
		<li>
			4. To endeavor to help others abide by the institute objectives and standards:
			<ul>
				<li>
					a. To neither incite nor aid another in violating the standards.
				</li>
				<li>
					b. To encourage adherence to the standards by word and example.
				</li>
				<li>
					c. To tell another and his/her observed fault in the biblical fashion. The person at fault,then, has a responsibility to correct his/her behavior (Matt. 18:15-17). If the person persists in disregarding the standards, it becomes the moral obligation of the students and faculty to report the violations to the appropriate authorities.
				</li>
			</ul>
		</li>
	</ul>
	 
	<p>Note: These standards apply not only to enrolled full-time students, but also to all other persons residing on campus, attending classes, or connected with the institute, including members of the students’ families, alumni, as well as all staff.</p>
	
	</p>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	  </div>
	</div>

	
	<!-- Statement of Faith Modal -->
	<div id="statementoffaith" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Statement of Faith</h3>
	  </div>
	  <div class="modal-body">
		<p>1. The One True God: There is one living and true God, eternally existent in three persons: God the Father, God the Son, and God the Holy Spirit (Deuteronomy 6:4; Matthew 28:19).</p>
		<p>2. The Scriptures Inspired:  The Bible is the only infallible, inspired, authoritative, written Word of God (2 Timothy 3:16).</p>
		<p>3. The Deity of the Lord Jesus Christ: We believe in the deity of our Lord Jesus Christ, in His virgin birth, in His sinless life, in His miracles, in His vicarious and atoning death, in His bodily resurrection, in His ascension to the right hand of the Father, in His personal future return to this earth in power and glory. (John 1:1).</p>
		<p>4. Original Sin and the Fall of Man: We believe that man, created in the image of God, fell into the depths of sin and iniquity by voluntary disobedience. In doing so, He passed on sin’s nature and consequences to all mankind with their accompanying loss of intended meaning and purpose (Genesis 1:27; Romans 5:12).</p> 
		<p>5. The Salvation of Man: Man's only hope of redemption and salvation from the power of sin is to willingly choose repentance and faith in the shed blood of Jesus Christ. Salvation is a free gift from God and is available to any and all who call upon the Name of the Lord (Acts 4:12; Romans 5:813, 15; 10:9, 13; James 1:21; Ephesians 2:8; Hebrews 3:12, 6:4-6, 12:15; Matthew 13:22; 2 Timothy 4:10; 1 Timothy 1:19).</p>
		<p>6. The Church and its Mission: We believe in the Lord’s commission, to go into all the world to preach the gospel of the Kingdom and disciple nations (Matthew 28:19; Mark 16:15-18).</p>
		<p>7. The Ordinances of the Church:
			a. Baptism in water in the Name of the Father, Son and Holy Spirit.  All who repent of their sins and believe in Christ as Savior and Lord are to be baptized.  This is a declaration to the world that they identify with Christ in His death and have been raised with Him in newness of life (Matthew 28:19; Mark 16:16; Acts 10:47, 48; Romans 6:4).
			b. The Lord's Supper, consisting of the communion sacraments of bread and the fruit of the vine, is the symbolic expression of our sharing the Divine nature of Christ (2 Peter 1:4), and a memorial of His suffering and death (1 Corinthians 11:26). </p>
		<p>8. The Baptism in the Holy Spirit: The baptism of believers in the Holy Spirit brings power for life and service (Luke 24:49; Acts 1:4,8; 2:11; 10:46; 1 Corinthians 12:131). </p>
		<p>9. Divine Healing: Divine healing was provided for all in the Old Testament (Exodus 15:2226; Psalms 103:13; Isaiah 53:4, 5) and in the New Testament it is an integral part of the Gospel (Matthew 8:16, 17; Acts 5:16; James 5:1416).</p>
		<p>10.   The Final Judgment: We believe that all shall stand before the judgment seat of Christ: the redeemed to be delivered unto everlasting life, and the unrepentant unto everlasting punishment (Revelation 20:11, 12; 2 Corinthians 5:10).</p>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	  </div>
	</div>
