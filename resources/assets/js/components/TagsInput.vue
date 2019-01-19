<template>
	<div class="flex flex-wrap bg-white border rounded pl-2 pr-4 pt-2 pb-1">
		<span v-for="tag in tags" class="inline-flex leading-none items-center text-sm bg-blue-lighter text-blue-darker rounded select-none p-1 mr-2 mb-1;">
			<span>{{tag}}</span>
			<button type="button" class="text-blue-dark text-lg leading-none" @click="removeTag(tag)">&times;</button>
		</span>
		<input class="flex-1 outline-0 py-1 ml-2 mb-1 tag-field" placeholder="Add tag..."
		@keydown.backspace="handleTagBackspace"
		@keydown.enter.prevent="addTag"
		v-model="newTag"
		>
	</div>
</template>

<script>
 export default {
 	// model: {
 	// 	prop: 'tags', 
 	// 	event: 'update'
 	// }, 
 	props: ['tagsInit'],
 	created() {
 		this.tags = this.tagsInit;
 	},

 	data() {
 		return {
 			newTag: '',
 			tags: []

 		};
 	}, 

 	methods: {
 		handleTagBackspace(e) {
 			if (this.newTag.length === 0) {
 				this.tags = this.tags.slice(0, -1);
 				this.$emit('update', this.tags.slice(0, -1));

 			}
 		},

 		addTag() {
 			if (this.newTag.length === 0 || this.tags.includes(this.newTag)) {
 				return;
 			}

 			this.tags.push(this.newTag);

 			this.$emit('update', [...this.tags, this.newTag]);
 			this.newTag = '';
 		}, 

 		removeTag(tag) {
 			this.tags = this.tags.filter(t => t != tag);
 			this.$emit('update', this.tags.filter(t => t != tag));
 		}
 	}
 }
</script>
<style>
.tags-input-text {
   min-width: 10rem;
}

.tag-field:focus {
	outline: none;
}
</style>

