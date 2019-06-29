<answer :answer="{{ $answer }}" inline-template>
  <div class="media post">
    <vote :model="{{ $answer }}" :name="'answer'"></vote>

    <div class="media-body">
      <form v-if="editing" @submit.prevent="update">
        <div class="form-group">
          <textarea rows="10" v-model="body" class="form-control" required></textarea>
        </div>
        <button class="btn btn-primary" :disabled="isInvalid">更新</button>
        <button class="btn btn-outline-secondary" @click="cancel" type="button">キャンセル</button>
      </form>
      <div v-else="!editing">
        <div v-html="bodyHtml"></div>
        <div class="row">
          <div class="col-4">
            <div class="ml-auto">
                    @can('update', $answer)
                      <a @click.prevent="edit" class="btn btn-sm btn-outline-info">編集</a>
                    @endcan
                    @can('delete', $answer)
                      <button @click="destroy" class="btn btn-sm btn-outline-danger">削除</button>

                    @endcan
                  </div>
          </div>
          <div class="col-4"></div>
          <div class="col-4">
            <user-info :model="{{ $answer }}" label="Answered"></user-info>

          </div>
        </div>
      </div>
    </div>
  </div>
</answer>