<section id="mixin1">
	<h2>
		Mixins
	</h2>
	<p>
		You can mix-in class selectors and id selectors. For Example:
	</p>
	<pre>
.a-class, #b-id {
  color: green;
}
.mixin-class {
  .a-class();
}
.mixin-id {
  #b-id();
}

<span class="pre-comment">// which outputs in:</span>

.a-class, #b-id {
  color: green;
}
.mixin-class {
  color: green;
}
.mixin-id {
  color: green;
}

<span class="pre-comment">// Notice that when you call the mixin, the parentheses () are optional.</span>
	</pre>
</section>



<section id="mixin2">
	<h3>
		Not outputting the mixin
	</h3>
	<p>
		If you want to create a mixin but you do not want that mixin to be output, you can put parentheses () after it. Example:
	</p>
	<pre>
.mixin {
  color: red;
}
.not-outputting-mixin() {
  background: blue;
}
.test-class {
  .my-mixin;
  .not-outputting-mixin;
}

<span class="pre-comment">// which outputs in:</span>

.mixin {
  color: red;
}

.test-class {
  color: red;
  background: blue
}

<span class="pre-comment">// The .not-outputting-mixin does not show up.</span>
	</pre>
</section>



<section id="mixin3">
	<h3>
		Selectors in mixins
	</h3>
	<p>
		Not only properties can be in a mix-in, it also can cotain of selectors.<br />
		For Example:
	</p>
	<pre>

	</pre>
</section>