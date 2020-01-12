import SmoothScroll from "./SmoothScroll";

import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init({
    duration: 1000
});

require('./bootstrap');
require('./Spa');
require('./3DHover');
require('./SmoothScroll');

window.smoothScroll = new SmoothScroll()