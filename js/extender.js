import { extend } from 'flarum/extend';
import app from 'flarum/app';
import Post from 'flarum/components/Post';

app.initializers.add('acme-custom-bbcode', () => {
    extend(Post.prototype, 'content', function (content) {
        content.replace(/\[glowgold\](.*?)\[\/glowgold\]/g, '<span class="glow-gold">$1</span>');
    });
});
