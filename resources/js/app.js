import './bootstrap';
import Swal from 'sweetalert2';

import 'jodit/esm/plugins/resizer/resizer'; // Resizer plugin is used when inserting images
import 'jodit/esm/plugins/video/video'; // Video plugin is used to insert videos

import { Jodit } from 'jodit';

window.Jodit = Jodit;

window.Swal = Swal

const layout = document.documentElement;

function closeMenu() {
	layout.classList.remove('layout-menu-expanded');
	document.querySelectorAll('.layout-menu-toggle button').forEach((toggle) => {
		toggle.setAttribute('aria-expanded', 'false');
	});
}

document.addEventListener('click', (event) => {
	if (!(event.target instanceof Element)) return;

	const toggle = event.target.closest('.layout-menu-toggle button');
	if (toggle) {
		const isExpanded = layout.classList.toggle('layout-menu-expanded');
		toggle.setAttribute('aria-expanded', String(isExpanded));
		return;
	}

	if (
		event.target.closest('.layout-overlay') ||
		event.target.closest('.layout-menu .menu-link:not(.menu-toggle)')
	) {
		closeMenu();
	}
});

document.addEventListener('keydown', (event) => {
	if (event.key === 'Escape') {
		closeMenu();
	}
});

