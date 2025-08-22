import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    close() {
        this.element.style.width = '0';
        this.#waitForAnimation().then(() => this.element.remove());
    }

    #waitForAnimation() {
        return Promise.all(
            this.element.getAnimations().map((animation) => animation.finished)
        );
    }
}
