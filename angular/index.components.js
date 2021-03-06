import { TablesSimpleComponent } from './app/components/tables-simple/tables-simple.component'
import { UiModalComponent } from './app/components/ui-modal/ui-modal.component'
import { UiTimelineComponent } from './app/components/ui-timeline/ui-timeline.component'
import { UiButtonsComponent } from './app/components/ui-buttons/ui-buttons.component'
import { UiIconsComponent } from './app/components/ui-icons/ui-icons.component'
import { UiGeneralComponent } from './app/components/ui-general/ui-general.component'
import { FormsGeneralComponent } from './app/components/forms-general/forms-general.component'
import { ChartsChartjsComponent } from './app/components/charts-chartjs/charts-chartjs.component'
import { WidgetsComponent } from './app/components/widgets/widgets.component'
import { UserProfileComponent } from './app/components/user-profile/user-profile.component'
import { UserVerificationComponent } from './app/components/user-verification/user-verification.component'
import { ComingSoonComponent } from './app/components/coming-soon/coming-soon.component'
import { UserEditComponent } from './app/components/user-edit/user-edit.component'
import { UserPermissionsEditComponent } from './app/components/user-permissions-edit/user-permissions-edit.component'
import { UserPermissionsAddComponent } from './app/components/user-permissions-add/user-permissions-add.component'
import { UserPermissionsComponent } from './app/components/user-permissions/user-permissions.component'
import { UserRolesEditComponent } from './app/components/user-roles-edit/user-roles-edit.component'
import { UserRolesAddComponent } from './app/components/user-roles-add/user-roles-add.component'
import { UserRolesComponent } from './app/components/user-roles/user-roles.component'
import { UserListsComponent } from './app/components/user-lists/user-lists.component'
import { DashboardComponent } from './app/components/dashboard/dashboard.component'
import { NavSidebarComponent } from './app/components/nav-sidebar/nav-sidebar.component'
import { NavHeaderComponent } from './app/components/nav-header/nav-header.component'
import { LoginLoaderComponent } from './app/components/login-loader/login-loader.component'
import { ResetPasswordComponent } from './app/components/reset-password/reset-password.component'
import { ForgotPasswordComponent } from './app/components/forgot-password/forgot-password.component'
import { LoginFormComponent } from './app/components/login-form/login-form.component'
import { RegisterFormComponent } from './app/components/register-form/register-form.component'

import { TradeDtComponent } from './app/components/trade-dt/trade-dt.component'
import { TradeDtAddComponent } from './app/components/trade-dt-add/trade-dt-add.component'
import { TradeDtEditComponent } from './app/components/trade-dt-edit/trade-dt-edit.component'

import { TeaCultureComponent } from './app/components/tea-culture/tea-culture.component'
import { TeaCultureAddComponent } from './app/components/tea-culture-add/tea-culture-add.component'
import { TeaCultureEditComponent } from './app/components/tea-culture-edit/tea-culture-edit.component'

import { TeaKnowledgeComponent } from './app/components/tea-knowledge/tea-knowledge.component'
import { TeaKnowledgeAddComponent } from './app/components/tea-knowledge-add/tea-knowledge-add.component'
import { TeaKnowledgeEditComponent } from './app/components/tea-knowledge-edit/tea-knowledge-edit.component'

import { TeaCollectionComponent } from './app/components/tea-collection/tea-collection.component'
import { TeaCollectionAddComponent } from './app/components/tea-collection-add/tea-collection-add.component'
import { TeaCollectionEditComponent } from './app/components/tea-collection-edit/tea-collection-edit.component'
import { TeaCollectionImgComponent } from './app/components/tea-collection-img/tea-collection-img.component'

import { TradeAnnouncementComponent } from './app/components/trade-announcement/trade-announcement.component'
import { TradeAnnouncementAddComponent } from './app/components/trade-announcement-add/trade-announcement-add.component'
import { TradeAnnouncementEditComponent } from './app/components/trade-announcement-edit/trade-announcement-edit.component'

import { TradeRuleComponent } from './app/components/trade-rule/trade-rule.component'
import { TradeRuleAddComponent } from './app/components/trade-rule-add/trade-rule-add.component'
import { TradeRuleEditComponent } from './app/components/trade-rule-edit/trade-rule-edit.component'

angular.module('app.components')
    .component('tablesSimple', TablesSimpleComponent)
    .component('uiModal', UiModalComponent)
    .component('uiTimeline', UiTimelineComponent)
    .component('uiButtons', UiButtonsComponent)
    .component('uiIcons', UiIconsComponent)
    .component('uiGeneral', UiGeneralComponent)
    .component('formsGeneral', FormsGeneralComponent)
    .component('chartsChartjs', ChartsChartjsComponent)
    .component('widgets', WidgetsComponent)
    .component('userProfile', UserProfileComponent)
    .component('userVerification', UserVerificationComponent)
    .component('comingSoon', ComingSoonComponent)
    .component('userEdit', UserEditComponent)
    .component('userPermissionsEdit', UserPermissionsEditComponent)
    .component('userPermissionsAdd', UserPermissionsAddComponent)
    .component('userPermissions', UserPermissionsComponent)
    .component('userRolesEdit', UserRolesEditComponent)
    .component('userRolesAdd', UserRolesAddComponent)
    .component('userRoles', UserRolesComponent)
    .component('userLists', UserListsComponent)
    .component('dashboard', DashboardComponent)
    .component('navSidebar', NavSidebarComponent)
    .component('navHeader', NavHeaderComponent)
    .component('loginLoader', LoginLoaderComponent)
    .component('resetPassword', ResetPasswordComponent)
    .component('forgotPassword', ForgotPasswordComponent)
    .component('loginForm', LoginFormComponent)
    .component('registerForm', RegisterFormComponent)

    .component('tradeDt', TradeDtComponent)
    .component('tradeDtAdd', TradeDtAddComponent)
    .component('tradeDtEdit', TradeDtEditComponent)

    .component('teaCulture', TeaCultureComponent)
    .component('teaCultureAdd', TeaCultureAddComponent)
    .component('teaCultureEdit', TeaCultureEditComponent)

    .component('teaKnowledge', TeaKnowledgeComponent)
    .component('teaKnowledgeAdd', TeaKnowledgeAddComponent)
    .component('teaKnowledgeEdit', TeaKnowledgeEditComponent)

    .component('teaCollection', TeaCollectionComponent)
    .component('teaCollectionAdd', TeaCollectionAddComponent)
    .component('teaCollectionEdit', TeaCollectionEditComponent)
    .component('teaCollectionImg', TeaCollectionImgComponent)

    .component('tradeAnnouncement', TradeAnnouncementComponent)
    .component('tradeAnnouncementAdd', TradeAnnouncementAddComponent)
    .component('tradeAnnouncementEdit', TradeAnnouncementEditComponent)

    .component('tradeRule', TradeRuleComponent)
    .component('tradeRuleAdd', TradeRuleAddComponent)
    .component('tradeRuleEdit', TradeRuleEditComponent)