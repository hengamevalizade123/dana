<section class="o-section c-section--statistics">
	<div class="o-section__wrapper">
		<div class="c-statistics">
			<ul class="p-0 m-0 d-flex">
				<li class="d-flex flex-column items-center">
					<strong data-target="2370">0</strong>
					<span>
تعداد مشاوره‌ها
		</span>
				</li>
				<li class="d-flex flex-column items-center">
					<strong data-target="332000">0</strong>
					<span>
تعداد فالوور اینستاگرام
		</span>
				</li>
				<li class="d-flex flex-column items-center">
					<strong data-target="379">0</strong>
					<span>
تعداد ویدئوهای آموزشی
		</span>
				</li>
				<li class="d-flex flex-column items-center">
					<strong data-target="1205">0</strong>
					<span>
تعداد کاربران آنلاین
		</span>
				</li>
			</ul>
		</div>
	</div>
</section>
<script>
	function animateCounter(el) {
		let target = +el.getAttribute("data-target");
		let count = 0;
		let step = Math.ceil(target / 50);

		let interval = setInterval(() => {
			count += step;
			if (count >= target) {
				count = target;
				clearInterval(interval);
			}
			el.textContent = count.toLocaleString("fa-IR");
		}, 20);
	}

	document.querySelectorAll(".c-statistics strong").forEach(el => {
		animateCounter(el);
	});
</script>
