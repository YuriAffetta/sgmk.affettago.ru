import { bodyLock, bodyUnlock } from "../../js/files/functions.js";

const planet = document.querySelector(".js-planet");

if (planet) {
  const video = planet.querySelector("video");

  const playVideo = () => {
    const currentScrollPosition = window.scrollY || window.pageYOffset;

    const newScrollPosition =
      currentScrollPosition + video.getBoundingClientRect().height * 0.3;
    window.scrollTo({
      top: newScrollPosition,
      behavior: "smooth", // для плавной прокрутки
    });
    // bodyLock();
    video.play();
  };

  const onVideoEnded = () => {
    // bodyUnlock();
    planet.classList.add("active");
  };

  if (video) {
    var options = {
      rootMargin: "0px 0px 75px 0px",
      threshold: 0.5, // Небольшой порог для того, чтобы убедиться, что видео входит в область видимости
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          playVideo();
          video.addEventListener("ended", onVideoEnded);
          observer.unobserve(entry.target); // Мы хотим запустить это только один раз
        }
      });
    }, options);

    observer.observe(video);
  }
}
