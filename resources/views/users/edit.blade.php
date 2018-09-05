@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h3>{{ $user->name }}</h3>

		<div>
			<form method="POST" action="{{ route('edit-profile') }}">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label for="name">Name: </label>
			    <input name="name" type="name" class="form-control" id="name" placeholder="Enter name" value="{{ $user->name }}">
			  </div>
			  <div class="form-group">
			    <label for="birthdate">Date of birth</label>
			    <input name="birthdate" type="date" class="form-control" id="birthdate" placeholder="Enter birthdate">
			  </div>
			  <div class="form-group">
			    <label for="location">Location</label>
			    <input name="location" type="text" class="form-control" id="location" placeholder="Enter location" value="{{ $user->location }}">
			  </div>

			  <div class="form-group">
			    <label for="nationality">Nationality</label>
			    <select name="nationality" class="form-control" id="nationality">
				<option value="0">Not specified</option>
				<option value="1">Afghan</option>
				<option value="2">Albanian</option>
				<option value="3">Algerian</option>
				<option value="4">American</option>
				<option value="5">Andorran</option>
				<option value="6">Angolan</option>
				<option value="7">Antiguan</option>
				<option value="8">Argentinian</option>
				<option value="9">Armenian</option>
				<option value="10">Aruban</option>
				<option value="11">Australian</option>
				<option value="12">Austrian</option>
				<option value="13">Azerbaijani</option>
				<option value="14">Bahamian</option>
				<option value="15">Bahraini</option>
				<option value="16">Bangladeshi</option>
				<option value="17">Barbadian</option>
				<option value="18">Belarusian</option>
				<option value="19">Belgian</option>
				<option value="20">Belizean</option>
				<option value="21">Beninese</option>
				<option value="22">Bermudian</option>
				<option value="23">Bhutanese</option>
				<option value="24">Bolivian</option>
				<option value="25">Bosnian</option>
				<option value="26">Botswanan</option>
				<option value="27">Brazilian</option>
				<option value="28">British</option>
				<option value="29">Bruneian</option>
				<option value="30">Bulgarian</option>
				<option value="31">Burkinese</option>
				<option value="32">Burmese</option>
				<option value="33">Burundian</option>
				<option value="188">Buryat</option>
				<option value="34">Cambodian</option>
				<option value="35">Cameroonian</option>
				<option value="36">Canadian</option>
				<option value="37">Cape Verdean</option>
				<option value="38">Chadian</option>
				<option value="185">Chechen</option>
				<option value="39">Chilean</option>
				<option value="40">Chinese</option>
				<option value="41">Colombian</option>
				<option value="42">Congolese</option>
				<option value="43">Costa Rican</option>
				<option value="44">Croatian</option>
				<option value="45">Cuban</option>
				<option value="46">Cypriot</option>
				<option value="47">Czech</option>
				<option value="48">Danish</option>
				<option value="49">Djiboutian</option>
				<option value="50">Dominican</option>
				<option value="51">Dutch</option>
				<option value="52">Ecuadorean</option>
				<option value="53">Egyptian</option>
				<option value="54">Emirati</option>
				<option value="187">English</option>
				<option value="55">Eritrean</option>
				<option value="56">Estonian</option>
				<option value="57">Ethiopian</option>
				<option value="58">Fijian</option>
				<option value="59">Finnish</option>
				<option value="60">French</option>
				<option value="61">Gabonese</option>
				<option value="62">Gambian</option>
				<option value="63">Georgian</option>
				<option value="64">German</option>
				<option value="65">Ghanaian</option>
				<option value="66">Greek</option>
				<option value="67">Grenadian</option>
				<option value="68">Guatemalan</option>
				<option value="69">Guinean</option>
				<option value="70">Guyanese</option>
				<option value="71">Haitian</option>
				<option value="72">Honduran</option>
				<option value="73">Hungarian</option>
				<option value="74">Icelandic</option>
				<option value="75">Indian</option>
				<option value="76">Indonesian</option>
				<option value="77">Iranian</option>
				<option value="78">Iraqi</option>
				<option value="79">Irish</option>
				<option value="177">Israeli</option>
				<option value="80">Italian</option>
				<option value="183">Ivorian</option>
				<option value="81">Jamaican</option>
				<option value="82">Japanese</option>
				<option value="83">Jordanian</option>
				<option value="84">Kazakh</option>
				<option value="85">Kenyan</option>
				<option value="192">Kurdish</option>
				<option value="86">Kuwaiti</option>
				<option value="184">Kyrgyz</option>
				<option value="190">Kyrgyzstani</option>
				<option value="87">Laotian</option>
				<option value="88">Latvian</option>
				<option value="89">Lebanese</option>
				<option value="90">Liberian</option>
				<option value="91">Libyan</option>
				<option value="92">Liechtensteiner</option>
				<option value="93">Lithuanian</option>
				<option value="94">Luxembourger</option>
				<option value="95">Macedonian</option>
				<option value="96">Madagascan</option>
				<option value="97">Malawian</option>
				<option value="98">Malaysian</option>
				<option value="99">Maldivian</option>
				<option value="100">Malian</option>
				<option value="101">Maltese</option>
				<option value="102">Mauritanian</option>
				<option value="103">Mauritian</option>
				<option value="104">Mexican</option>
				<option value="105">Moldovan</option>
				<option value="106">Monacan</option>
				<option value="107">Mongolian</option>
				<option value="108">Montenegrin</option>
				<option value="109">Moroccan</option>
				<option value="110">Mozambican</option>
				<option value="179">Myanmar</option>
				<option value="111">Namibian</option>
				<option value="112">Nepalese</option>
				<option value="113">New Zealander</option>
				<option value="114">Nicaraguan</option>
				<option value="115">Nigerian</option>
				<option value="116">Nigerien</option>
				<option value="117">North Korean</option>
				<option value="118">Norwegian</option>
				<option value="119">Omani</option>
				<option value="120">Pakistani</option>
				<option value="182">Palestinian</option>
				<option value="121">Panamanian</option>
				<option value="186">Papua New Guinean</option>
				<option value="122">Paraguayan</option>
				<option value="123">Peruvian</option>
				<option value="124">Philippine</option>
				<option value="125">Polish</option>
				<option value="126">Portuguese</option>
				<option value="191">Puerto Rican</option>
				<option value="127">Qatari</option>
				<option value="128">Romanian</option>
				<option value="129">Russian</option>
				<option value="130">Rwandan</option>
				<option value="189">Saint Lucian</option>
				<option value="131">Salvadorean</option>
				<option value="132">Saudi Arabian</option>
				<option value="133">Scottish</option>
				<option value="134">Senegalese</option>
				<option value="135">Serbian</option>
				<option value="136">Seychellois</option>
				<option value="180">Shan</option>
				<option value="137">Sierra Leonian</option>
				<option value="138">Singaporean</option>
				<option value="139">Slovak</option>
				<option value="140">Slovenian</option>
				<option value="141">Solomon Islander</option>
				<option value="142">Somali</option>
				<option value="143">South African</option>
				<option value="144">South Korean</option>
				<option value="145">Spanish</option>
				<option value="146">Sri Lankan</option>
				<option value="181">St. Vincent and the grenadines</option>
				<option value="147">Sudanese</option>
				<option value="148">Surinamese</option>
				<option value="149">Swazi</option>
				<option value="150">Swedish</option>
				<option value="151">Swiss</option>
				<option value="152">Syrian</option>
				<option value="178">Tai</option>
				<option value="153">Taiwanese</option>
				<option value="154">Tajik</option>
				<option value="155">Tanzanian</option>
				<option value="156">Thai</option>
				<option value="157">Togolese</option>
				<option value="158">Trinidadian</option>
				<option value="159">Tunisian</option>
				<option value="160">Turkish</option>
				<option value="161">Turkmen</option>
				<option value="162">Tuvaluan</option>
				<option value="163">Ugandan</option>
				<option value="164">Ukrainian</option>
				<option value="165">Uruguayan</option>
				<option value="166">Uzbek</option>
				<option value="167">Vanuatuan</option>
				<option value="168">Venezuelan</option>
				<option value="169">Vietnamese</option>
				<option value="170">Welsh</option>
				<option value="171">Western Samoan</option>
				<option value="172">Yemeni</option>
				<option value="173">Yugoslav</option>
				<option value="174">Zairean</option>
				<option value="175">Zambian</option>
				<option value="176">Zimbabwean</option>
				</select>
			  </div>

			  <div class="form-group">
			    <label for="height">Height</label>
			    <select name="height" class="form-control" id="height">
				<option value="0">Not specified</option>
				<option value="150">150 cm (4' 11")</option>
				<option value="151">151 cm (4' 11")</option>
				<option value="152">152 cm (5' 00")</option>
				<option value="153">153 cm (5' 00")</option>
				<option value="154">154 cm (5' 00")</option>
				<option value="155">155 cm (5' 01")</option>
				<option value="156">156 cm (5' 01")</option>
				<option value="157">157 cm (5' 02")</option>
				<option value="158">158 cm (5' 02")</option>
				<option value="159">159 cm (5' 02")</option>
				<option value="160">160 cm (5' 03")</option>
				<option value="161">161 cm (5' 03")</option>
				<option value="162">162 cm (5' 03")</option>
				<option value="163">163 cm (5' 04")</option>
				<option value="164">164 cm (5' 04")</option>
				<option value="165">165 cm (5' 05")</option>
				<option value="166">166 cm (5' 05")</option>
				<option value="167">167 cm (5' 05")</option>
				<option value="168">168 cm (5' 06")</option>
				<option value="169">169 cm (5' 06")</option>
				<option value="170">170 cm (5' 07")</option>
				<option value="171">171 cm (5' 07")</option>
				<option value="172">172 cm (5' 07")</option>
				<option value="173">173 cm (5' 08")</option>
				<option value="174">174 cm (5' 08")</option>
				<option value="175">175 cm (5' 09")</option>
				<option value="176">176 cm (5' 09")</option>
				<option value="177">177 cm (5' 09")</option>
				<option value="178">178 cm (5' 10")</option>
				<option value="179">179 cm (5' 10")</option>
				<option value="180">180 cm (5' 11")</option>
				<option value="181">181 cm (5' 11")</option>
				<option value="182">182 cm (5' 11")</option>
				<option value="183">183 cm (6' 00")</option>
				<option value="184">184 cm (6' 00")</option>
				<option value="185">185 cm (6' 01")</option>
				<option value="186">186 cm (6' 01")</option>
				<option value="187">187 cm (6' 01")</option>
				<option value="188">188 cm (6' 02")</option>
				<option value="189">189 cm (6' 02")</option>
				<option value="190">190 cm (6' 02")</option>
				<option value="191">191 cm (6' 03")</option>
				<option value="192">192 cm (6' 03")</option>
				<option value="193">193 cm (6' 04")</option>
				<option value="194">194 cm (6' 04")</option>
				<option value="195">195 cm (6' 04")</option>
				<option value="196">196 cm (6' 05")</option>
				<option value="197">197 cm (6' 05")</option>
				<option value="198">198 cm (6' 06")</option>
				<option value="199">199 cm (6' 06")</option>
				<option value="200">200 cm (6' 06")</option>
				<option value="201">201 cm (6' 07")</option>
				<option value="202">202 cm (6' 07")</option>
				<option value="203">203 cm (6' 08")</option>
				<option value="204">204 cm (6' 08")</option>
				<option value="205">205 cm (6' 08")</option>
				<option value="206">206 cm (6' 09")</option>
				<option value="207">207 cm (6' 09")</option>
				<option value="208">208 cm (6' 10")</option>
				<option value="209">209 cm (6' 10")</option>
				<option value="210">210 cm (6' 10")</option>
				<option value="211">211 cm (6' 11")</option>
				<option value="212">212 cm (6' 11")</option>
				<option value="213">213 cm (7' 00")</option>
				<option value="214">214 cm (7' 00")</option>
				<option value="215">215 cm (7' 00")</option>
				<option value="216">216 cm (7' 01")</option>
				<option value="217">217 cm (7' 01")</option>
				<option value="218">218 cm (7' 02")</option>
				<option value="219">219 cm (7' 02")</option>
				<option value="220">220 cm (7' 02")</option>
				</select>
			  </div>

			  <div class="form-group">
			    <label for="bodytype">Body Type</label>
			    <select name="bodytype" class="form-control" id="bodytype">
			    	<option value="NA">Not specified</option>
					<option value="Slim" selected="selected">Slim</option>
					<option value="Athletic">Athletic</option>
					<option value="Average">Average</option>
					<option value="Curvy">Curvy</option>
					<option value="Heavy">Heavy</option>
			    </select>

			  </div>

			  <div class="form-group">
			    <label for="eyes">Eyes</label>
			    <select name="eyes" class="form-control" id="eyes">
			    	<option value="NA">Not specified</option>
					<option value="Brown" selected="selected">Brown</option>
					<option value="Blue">Blue</option>
					<option value="Green">Green</option>
					<option value="Hazel">Hazel</option>
					<option value="Gray">Gray</option>
					<option value="Amber">Amber</option>
					<option value="Other">Other</option>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="hair">Hair</label>
			    <select name="hair" class="form-control" id="hair">
			    	<option value="NA">Not specified</option>
					<option value="Blond">Blond</option>
					<option value="Brown">Brown</option>
					<option value="Black" selected="selected">Black</option>
					<option value="Red">Red</option>
					<option value="Auburn">Auburn</option>
					<option value="Grey">Grey</option>
					<option value="Other">Other</option>
			    </select>
			  </div>
			  <input type="hidden" name="location" value="NULL">

			  <div class="form-group">
			    <label for="hair">{{ __('About') }}</label>
			    <textarea name="about" class="form-control">{{ $user->about }}</textarea>
			  </div>

			  	<div class="form-group">
				  	<div class="form-check">

				  		@if($user->notification === 'YES')
					  	<input class="form-check-input" type="checkbox" name="notification" id="notification" checked="checked">

					  	@else
					  	<input class="form-check-input" type="checkbox" name="notification" id="notification">
					  	@endif


					  <label class="form-check-label" for="notification">
					    Allow user email notification
					  </label>
					</div>
				</div>

			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>			
		</div>

	</div>

@endsection