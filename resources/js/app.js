import './bootstrap';

import { livewire_hot_reload } from 'virtual:livewire-hot-reload'
livewire_hot_reload();

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect'

window.Alpine = Alpine;
Alpine.plugin(intersect)

Alpine.start();
