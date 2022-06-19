        <div class="menuimage">
			<h1>聯絡我們<br>CONTACT</h1>
		</div>
		<div class="smalllink">
			<a href="/"><span> 首頁 </span></a>><a href="contact"><span> 聯絡我們 </span></a>
		</div>
		<form method="post" action="/create" class="form" >	
		@csrf
			<div class="F1">
				<span>聯絡目的:</span>
				<select name="purpose">
					<option value="客服詢問"> 客服詢問 </option>
					<option value="求職詢問"> 求職詢問 </option>
					<option value="採購業務"> 採購業務 </option>
					<option value="加盟業務"> 加盟業務 </option>
					<option value="其他">  其他  </option>
				</select>
			</div>

			<div>
				<span>姓名:</span>
				<input type="text" placeholder=" 請輸入姓名 " id="name" name="name">

				<span>信箱:</span>
				<input type="text"  name="email" placeholder=" 請輸入信箱 " id="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
				<span class="ok">✔</span>
				<span class="notok">請輸入正確格式！</span>
			</div>
			<div>
				<span>地址:</span>
				<input type="text" name="address" placeholder=" 請輸入地址 " id="address">
				<span>電話:</span>
				<input type="text" name="phone" placeholder=" 請輸入電話：09XX-XXXXXX " id="phone" maxlength="11" pattern="09\d{2}-\d{6}" required>
				<span class="ok">✔</span>
				<span class="notok">請輸入正確格式！</span>
			</div>
			<div>
				<span>主旨:</span>
				<input type="text" name="main" placeholder=" 請輸入主旨 " id="main">
			</div>
			<div>
				<span>內容:</span>
				<textarea  name="content" id="body" cols="30" rows="5" placeholder="請輸入內容"></textarea>
			</div>
			<button  id="submit"  type="submit" onclick="showalert()">
				<a href="" >
					<span>提交表單</span>
				</a>
				<script>
				function showalert(){
					alert("已送出表單！謝謝您的填寫！");
				}
				</script>
			</button>
		</form>
		<hr>
		<section class="mapsection">
			<div class="information">
				<h2> Lys Fleuri </h2>
				<hr>
				<p>
					地址：臺灣科技大學<br>
					電話：0975178804<br>
					營業時間： 10:00 ~ 21:00<br>	
				</p>
			</div>
				
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6472.203720590506!2d121.54331390787591!3d25.0118295495754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442aa2176c4c0ad%3A0x90db5e44ee29f455!2z5ZyL56uL6Ie654Gj56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1649501211633!5m2!1szh-TW!2stw" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
			</iframe>

		</section>	