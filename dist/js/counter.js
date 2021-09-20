import { CountUp } from "./countUp.min.js";
const counters = document.querySelectorAll("*[data-counter]");
const observer = new IntersectionObserver(
	(entries) => {
		entries.forEach((entry) => {
			const {
				counterEnd,
				counterSuffix,
				counterPrefix = "",
			} = entry.target.dataset;

			if (entry.intersectionRatio > 0.45) {
				const cCounter = new CountUp(entry.target, counterEnd, {
					prefix: counterPrefix,
					suffix: counterSuffix,
				});
				cCounter.start();
				observer.unobserve(entry.target);
			}
		});
	},
	{
		threshold: [0, 0.5, 1],
	}
);
counters.forEach((counter) => {
	const { counterSuffix, counterPrefix = "" } = counter.dataset;
	counter.innerHTML = `${counterPrefix}0${counterSuffix}`;
	observer.observe(counter);
});
//# sourceMappingURL=counter.js.map