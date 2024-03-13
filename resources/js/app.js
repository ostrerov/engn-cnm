import './bootstrap';
import 'flowbite';
import { livewire_hot_reload } from 'virtual:livewire-hot-reload'
import './timeformatter';
import DarkMode from "./dark.js";

livewire_hot_reload();
const theme = new DarkMode();
