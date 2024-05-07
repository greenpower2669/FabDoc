<style>
.content {
	display: grid;
	width: 100%;
	margin: 0 auto;
	padding: 10vh 25px;
	max-width: 1300px;
	grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
	grid-auto-rows: 200px;
	grid-gap: 4rem;
	grid-row-gap: 6rem;
	justify-content: center;
	list-style: none;
}

.content__item {
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	counter-increment: itemcounter;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	position: relative;
    z-index: 1;
    pointer-events: none;
}

.content__item::before {
	color: var(--color-number);
	position: absolute;
	top: 0;
	left: 0;
	content: counters(itemcounter, ".", decimal-leading-zero);
}

.marquee {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	overflow: hidden;
	pointer-events: none;
}

.marquee__inner {
	width: fit-content;
	display: flex;
	position: relative;
	--offset: 1rem;
	--move-initial: calc(-25% + var(--offset));
	--move-final: calc(-50% + var(--offset));
	transform: translate3d(var(--move-initial), 0, 0);
	animation: marquee 1s linear infinite;
	animation-play-state: paused;
	opacity: 0;
}

.button--atlas:hover .marquee__inner {
	animation-play-state: running;
	opacity: 1;
	transition-duration: 1s;
}

.marquee span {
	text-align: center;
	white-space: nowrap;
	font-style: italic;
	padding: 1.5rem 0.5rem;
}

@keyframes marquee {
	0% {
		transform: translate3d(var(--move-initial), 0, 0);
	}

	100% {
		transform: translate3d(var(--move-final), 0, 0);
	}
}

.button--kari {
	font-family: freight-display-pro, serif;
	font-weight: 900;
	font-size: 1.25rem;
	border-radius: 50%;
	border: 2px solid #000;
}

.button--kari > span {
	display: inline-block;
	transition: opacity 0.1s;
}

.button--kari:hover > span {
	opacity: 0;
}

.button--kari .marquee {
	transform: rotate(-2.75deg);
}

.button--kari:hover .marquee__inner {
	animation-play-state: running;
	opacity: 1;
	transition-duration: 0.6s;
}

</style>


<html>
<ol class="content">

<button class="button button--kari">
						<span>i</span>
						<div class="marquee" aria-hidden="true">
							<div class="marquee__inner">
								<span>ça va?</span>
								<span>Oui, je crois</span>
								<span>Oui, je crois!</span>
								<span>là !! </span>
							</div>
						</div>
					</button>
</o1>
  </html>