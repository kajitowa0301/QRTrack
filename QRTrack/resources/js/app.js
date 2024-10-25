import './bootstrap';
import 'preline';

import Alpine from 'alpinejs';
import  persist  from '@alpinejs/persist';

Alpine.plugin(persist);

window.Alpine = Alpine;

Alpine.start();

function LocalsetItem(key ){
    console.log(key);
}