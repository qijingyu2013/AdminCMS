class TeaCultureAddController {
  constructor (API, $state, $stateParams, $scope) {
    'ngInject'
    $scope.vm.content = "<h3>在这里输入内容</h3>"
    $scope.froalaOptions = {
      // placeholder: "Edit Me",
      heightMin: 300,
      language: 'zh_cn',
      imageUploadURL: "upload/imgEditor"
    }

    this.$state = $state
    this.formSubmitted = false
    this.API = API
    this.alerts = []
    if ($stateParams.alerts) {
      this.alerts.push($stateParams.alerts)
    }
  }

  save (isValid) {
    if (isValid) {
      let Teacultures = this.API.service('teacultures', this.API.all('informs'))
      // let $state = this.$state

      Teacultures.post({
        'title': this.title,
        'content': this.content
      }).then(() => {
        let alert = { type: 'success', 'title': 'Success!', msg: '成功添加了一条茶文化.' }
        // $state.go($state.current, { alerts: alert})
        this.alerts.push(alert);
    }, (response) => {
        let alert = { type: 'error', 'title': 'Error!', msg: response.data.message }
        // $state.go($state.current, { alerts: alert})
        this.alerts.push(alert);
      })
    } else {
      this.formSubmitted = true
    }
  }

  $onInit () {}
}

export const TeaCultureAddComponent = {
  templateUrl: './views/app/components/tea-culture-add/tea-culture-add.component.html',
  controller: TeaCultureAddController,
  controllerAs: 'vm',
  bindings: {}
}
