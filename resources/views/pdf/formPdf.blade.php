<!DOCTYPE html>
<html>
<head>
	<title>Report Title</title>
</head>
<body>
	<div>
		All mandatory fields are marked by an *.
		<div>
			
			<div>
				About You	
			</div>
			{{-- table one --}}
			<table>
				<tr>
					<th></th>
					<th></th>
				</tr>
				@if(isset($content->name))
					<tr>
						<td>
							*Name
						</td>
						<td>
							{{ $content->name }}
						</td>
					</tr>
				@endif
				
				@if(isset($content->nic))
					<tr>
						<td>
							*NIC
						</td>
						<td>
							{{ $content->nic }}
						</td>
					</tr>
				@endif

				@if(isset($content->mobile))
					<tr>
						<td>
							*Phone
						</td>
						<td>
							{{ $content->mobile }}
						</td>
					</tr>
				@endif

				@if(isset($content->email))
					<tr>
						<td>
							Email
						</td>
						<td>
							{{ $content->email }}
						</td>
					</tr>
				@endif

				@if(isset($content->youAre))
					<tr>
						<td>
							You are the
						</td>
						<td>
							{{ $content->youAre }}
						</td>
					</tr>
				@endif
			</table>
		</div>

		<div>
			<div>
				About the Accident
			</div>

			@if(isset($content->F2S1Q1))
				<div>
					<h4>Section 1: When did the accident happen?</h4>
					{{-- table two --}}
					<table>
						<tr>
							<td></td>
							<td></td>	
						</tr>
						<tr>
							<td>
								*Select Date & Time
							</td>
							<td>
								{{ $content->F2S1Q1 }}
							</td>
						</tr>
					</table>
				</div>
			@endif

			<div>
				<h4>Section 2: Where did the accident happen?</h4>
				{{-- table_3 --}}
				<table>
					<tr>
						<td></td>
						<td></td>	
					</tr>
					@if(isset($content->F2S2Q1))
						<tr>
							<td>
								*The accident happened at:
							</td>
							<td>
								{{ $content->F2S2Q1 }}
							</td>
						</tr>
					@endif

					@if(isset($contect->F2S2Q2))
						<tr>
							<td>
								*Organization Name
							</td>
							<td>
								{{ $contect->F2S2Q2 }}
							</td>
						</tr>
					@endif

					@if(isset($contect->F2S2Q3))
						<tr>
							<td>
								Address or Details where the accident happened 
							</td>
							<td>
								{{ $contect->F2S2Q3 }}
							</td>
						</tr>
					@endif
				</table>
			</div>

			<div>
				<h4>Section 3: How did the accident happen?</h4>
				{{-- table_4 --}}
				<table>
					<tr>
						<th></th>
						<th></th>
					</tr>
					@if(isset($content->F2S3Q1))
						<tr>
							<td>
								Any person injured in the accident?
							</td>
							<td>
								{{ $content->F2S3Q1 }}			
							</td>
						</tr>
					@endif

					@if(isset($content->F2S3Q2))
						<tr>
							<td>
								About the type of accident?
							</td>
							<td>
								{{ $content->F2S3Q2 }}			
							</td>
						</tr>
					@endif

					@if(isset($content->F2S3Q3))
						<tr>
							<td>
								About the type of equipment or agencies that led to the accident
							</td>
							<td>
								{{ $content->F2S3Q3 }}
							</td>
						</tr>
					@endif

					@if(isset($content->F2S3Q4))
						<tr>
							<td>
								write a short description about how the accident took place including following details
								<ul>
		                            <li> Name and type of machinery or substance involved</li>
		                            <li> The events that led to the accident</li>
		                            <li> What the injured person was doing at the time of the accident</li>
		                            <li> Name of other persons involved</li>
		                        </ul>
							</td>
							<td>
								{{ $content->F2S3Q4 }}
							</td>
						</tr>
					@endif
				</table>
			</div>
		</div>

		<div>
			<h3>About the Injured Person</h3>
		</div>

		<div>
			<h4>Section 1: Particulars of the Injured Person</h4>
			<table>
				@if(isset($content->F3S1Q2))
					<tr>
						<td>
							Employee ID
						</td>
						<td>
							{{ $content->F3S1Q2 }}
						</td>
					</tr>
				@endif
				
				@if(isset($content->F3S1Q3))
					<tr>
						<td>
							NIC NO
						</td>
						<td>
							{{ $content->F3S1Q3 }}
						</td>
					</tr>
				@endif

				@if(isset($content->F3S1Q2))
					<tr>
						<td>
							NIC NO
						</td>
						<td>
							{{ $content->F3S1Q3 }}
						</td>
					</tr>
				@endif

				@if(isset($content->F3S1Q4))
					<tr>
						<td>
							Full Name
						</td>
						<td>
							{{ $content->F3S1Q4 }}
						</td>
					</tr>
				@endif

				@if(isset($content->F3S1Q5))
					<tr>
						<td>
							Date of Birth
						</td>
						<td>
							{{ $content->F3S1Q5 }}
						</td>
					</tr>
				@endif

				@if(isset($content->F3S1Q6))
					<tr>
						<td>
							Gender
						</td>
						<td>
							{{ $content->F3S1Q6 }}
						</td>
					</tr>
				@endif

				@if(isset($content->F3S1Q7))
					<tr>
						<td>
							Nationality
						</td>
						<td>
							{{ $content->F3S1Q7 }}
						</td>
					</tr>
				@endif

				@if(isset($content->F3S1Q8) || isset($content->F3S1Q9) || isset($content->F3S1Q10))
					<tr>
						<td>
							Address
						</td>
						<td>
							{{ (isset($content->F3S1Q8) ? $content->F3S1Q8  : '') .
								(isset($content->F3S1Q9) ? ', '.$content->F3S1Q9.', ' : '') .
								(isset($content->F3S1Q10) ? $content->F3S1Q10 : '') }}
						</td>
					</tr>
				@endif
				
				@if(isset($content->F3S1Q12) || isset($content->F3S1Q13) || isset($content->F3S1Q14))
					<tr>
						<td>
							Address
						</td>
						<td>
							{{ (isset($content->F3S1Q12) ? $content->F3S1Q12  : '') .
								(isset($content->F3S1Q13) ? ', '.$content->F3S1Q13.', ' : '') .
								(isset($content->F3S1Q14) ? $content->F3S1Q14 : '') }}
						</td>
					</tr>
				@endif

				@if(isset($content->F3S1Q11) || isset($content->F3S1Q15))
					<tr>
						<td>
							Contact No.
						</td>
						<td>
							{{ $content->F3S1Q11 }}
						</td>
					</tr>
				@endif
			</table>
		</div>

		<div>
			<h4>Section 2: Employment details of the Injured Person</h4>

			<table>
				<tr>
					<td></td>
					<td></td>
				</tr>
				@if(isset($content->F3S2Q1))
					<tr>
						<td>
							Employer's Organisation Name
						</td>
						<td>
							{{ $content->F3S2Q1 }}	
						</td>
					</tr>
				@endif

				@if(isset($content->F3S2Q9))
					<tr>
						<td>
							Employer's Mailing Address
						</td>
						<td>
							{{ $content->F3S2Q9 }}	
						</td>
					</tr>
				@endif


				@if(isset($content->F3S2Q9) || isset($content->F3S2Q10) || isset($content->F3S2Q11))
					<tr>
						<td>
							Employer's Mailing Address
						</td>
						<td>
							{{ (isset($content->F3S2Q9) ? $content->F3S2Q9  : '') .
								(isset($content->F3S2Q10) ? ', '.$content->F3S2Q10.', ' : '') .
								(isset($content->F3S2Q11) ? $content->F3S2Q11 : '') }}
						</td>
					</tr>
				@endif

				@if(isset($content->F3S2Q3))
					<tr>
						<td>
							Occupation
						</td>
						<td>
							{{ $content->F3S2Q3 }}	
						</td>
					</tr>
				@endif

				@if(isset($content->F3S2Q4))
					<tr>
						<td>
							Start Date of Employment
						</td>
						<td>
							{{ $content->F3S2Q4 }}	
						</td>
					</tr>
				@endif

				@if(isset($content->F3S2Q5))
					<tr>
						<td>
							Average Monthly Earnings
						</td>
						<td>
							{{ $content->F3S2Q5 }}	
						</td>
					</tr>
				@endif

				@if(isset($content->F3S2Q7))
					<tr>
						<td>
							Percentage of manual work performed by the injured person
						</td>
						<td>
							{{ $content->F3S2Q7 }}	
						</td>
					</tr>
				@endif

				
			</table>
		</div>

		<div>
			<h4>Section 3: Injury Details</h4>

			<table>
				<tr>
					<th></th>
					<th></th>
				</tr>

				@if(isset($content->F3S3Q1))
					<tr>
						<td>
							Did the accident result in death of the injured person?
						</td>
						<td>
							{{ $content->F3S3Q1 }}	
						</td>
					</tr>
				@endif
				
				@if(isset($content->F3S3Q2))
					<tr>
						<td>
							Nature of injury
						</td>
						<td>
							{{ $content->F3S3Q2 }}	
						</td>
					</tr>
				@endif

				@if(isset($content->F3S3Q3))
					<tr>
						<td>
							Associated body part(s) injured
						</td>
						<td>
							@for ($i = 0; $i < count($content->F3S3Q3); $i++)	
								@if($i > 0)
									{{', '}}
								@endif
								{{ $content->F3S3Q3[$i] }}
							@endfor
						</td>
					</tr>
				@endif

			</table>

			<div>
				<h4>Section 4: Other Details</h4>

				<table>
					<tr>
						<th></th>
						<th></th>
					</tr>						
					
					@if(isset($content->F3S4Q1))
						<tr>
							<td>
								Was the injured person hospitalised for more than 24 hours
							</td>
							<td>
								{{ $content->F3S4Q1 }}	
							</td>
						</tr>
					@endif
					
					@if(isset($content->F3S4Q2))
						<tr>
							<td>
								No. of days of medical leave
							</td>
							<td>
								{{ $content->F3S4Q2 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S4Q3))
						<tr>
							<td>
								Date of 4 th day of Medical leave
							</td>
							<td>
								{{ $content->F3S4Q3 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S4Q4))
						<tr>
							<td>
								Reason of late reporting
							</td>
							<td>
								{{ $content->F3S4Q4 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S4Q5))
						<tr>
							<td>
								Hospital/ Clinic where the injured person was examined or treated
							</td>
							<td>
								{{ $content->F3S4Q5 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S4Q6))
						<tr>
							<td>
								Would you like to provide any witness information?
							</td>
							<td>
								{{ $content->F3S4Q6 }}	
							</td>
						</tr>
					@endif


				</table>
			</div>

			<div>
				<h4>Section 5: Particulars of the Witness</h4>

				<table>
					<tr>
						<th></th>
						<th></th>
					</tr>
					
					@if(isset($content->F3S5Q1))
						<tr>
							<td>
								NIC No.
							</td>
							<td>
								{{ $content->F3S5Q1 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S5Q2))
						<tr>
							<td>
								Full Name
							</td>
							<td>
								{{ $content->F3S5Q2 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S5Q3))
						<tr>
							<td>
								Contact No.
							</td>
							<td>
								{{ $content->F3S5Q3 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S5Q4))
						<tr>
							<td>
								Email
							</td>
							<td>
								{{ $content->F3S5Q4 }}	
							</td>
						</tr>
					@endif

				</table>
			</div>

			<div>
				<h4>Section 6: Employment Details of the Witness</h4>

				<table>
					<tr>
						<th></th>
						<th></th>
					</tr>
					
					@if(isset($content->F3S6Q1))
						<tr>
							<td>
								Employer's Organisation Name
							</td>
							<td>
								{{ $content->F3S6Q1 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S6Q9) || isset($content->F3S6Q10) || isset($content->F3S6Q11))
						<tr>
							<td>
								Employer's Mailing Address
							</td>
							<td>
								{{ (isset($content->F3S6Q9) ? $content->F3S6Q9  : '') .
									(isset($content->F3S6Q10) ? ', '.$content->F3S6Q10.', ' : '') .
									(isset($content->F3S6Q11) ? $content->F3S6Q11 : '') }}
							</td>
						</tr>
					@endif

					@if(isset($content->F3S6Q3))
						<tr>
							<td>
								What time did the injured person start work on the day of the accident?
							</td>
							<td>
								{{ $content->F3S6Q3 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S6Q4))
						<tr>
							<td>
								Was the injured person working overtime when the accident happened?
							</td>
							<td>
								{{ $content->F3S6Q4 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S6Q5))
						<tr>
							<td>
								Was the person injured while performing official work duties? 
							</td>
							<td>
								{{ $content->F3S6Q5 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S6Q6))
						<tr>
							<td>
								Name of insurer
							</td>
							<td>
								{{ $content->F3S6Q6 }}	
							</td>
						</tr>
					@endif

					@if(isset($content->F3S6Q8))
						<tr>
							<td>
								Insurance Policy No.
							</td>
							<td>
								{{ $content->F3S6Q8 }}	
							</td>
						</tr>
					@endif
				</table>
			</div>
		</div>
	</div>
</body>
</html>