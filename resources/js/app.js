import './bootstrap';
import './datetime';
import {toggleModal} from "./toggleModal"

import Alpine from 'alpinejs';

window.Alpine = Alpine;
window.toggleModal = toggleModal;

Alpine.start();
