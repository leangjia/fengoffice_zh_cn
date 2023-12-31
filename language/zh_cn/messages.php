<?php

  /**
  * Array of messages file (error, success message, status...)
  *
  * @version 1.0
  * @author Ilija Studen <ilija.studen@gmail.com>
  */

  return array(
  
    // Empty, dnx et
    'object dnx' => '空空如也————对象不存在',
    'no mail accounts set' => '没有可用于发邮件的邮箱帐号，请先创建一个邮箱帐号',
    'no mail accounts set for check' => '您还没有电子邮件帐户，请先创建一个电子邮件帐户',
    'email dnx' => '请求的电子邮件不存在',
  	'email dnx deleted' => '请求的电子邮件已从数据库中删除',
    'project dnx' => '数据库中不存在请求的工作区',
    'contact dnx' => '数据库中不存在请求的联系人',
    'company dnx' => '数据库中不存在请求的公司',
	'billing category dnx' => '数据库中不存在请求的计费类别',
    'message dnx' => '请求的便签不存在',
    'no comments in message' => '对此便签没有任何评论',
    'no comments associated with object' => '没有为此对象发布评论',
    'no messages in project' => '此工作区中没有便签',
    'no subscribers' => '没有用户关注此对象',
    'no activities in project' => '没有为此工作区记录任何活动',
    'comment dnx' => '请求的评论不存在',
    'milestone dnx' => '请求的里程碑不存在',
    'task list dnx' => '请求的任务不存在',
    'task dnx' => '请求的任务不存在',
    'event type dnx' => '请求的事务类型不存在',
    'no milestones in project' => '此工作区中没有里程碑',
    'no active milestones in project' => '此工作区中没有活动的里程碑',
    'empty milestone' => '此里程碑为空。您可以随时向其添加 <a class="internalLink" href="{1}">任务</a> 到其中',
    'no logs for project' => '没有与此工作区相关的日志条目',
    'no recent activities' => '数据库中没有记录最近的活动',
    'no open task lists in project' => '此工作区中没有打开的任务',
    'no completed task lists in project' => '此工作区中没有已完成的任务',
    'no open task in task list' => '此列表中没有打开的任务',
    'no closed task in task list' => '此列表中没有打开的任务',
    'no open task in milestone' => '此里程碑中没有打开的任务',
    'no closed task in milestone' => '此里程碑中没有已关闭的任务',
    'no projects in db' => '数据库中没有定义的工作区',
    'no projects owned by company' => '没有此公司拥有的工作区',
    'no projects started' => '没有启动的工作区',
    'no active projects in db' => '没有活动的工作区',
    'no new objects in project since last visit' => '自上次访问以来，此工作区中没有新对象',
    'no clients in company' => '您的公司没有任何注册客户',
    'no users in company' => '此公司中没有用户',
    'client dnx' => '所选客户公司不存在',
    'company dnx' => '所选公司不存在',
    'user dnx' => '数据库中不存在请求的用户',
    'avatar dnx' => '图片不存在',
    'no current avatar' => '图片未上传',
    'picture dnx' => '图片不存在',
    'no current picture' => '图片未上传',
    'no current logo' => '您当前没有LOGO。请上传一个新的。',
    'user not on project' => '所选用户未参与所选工作区',
    'company not on project' => '所选公司未参与所选工作区',
    'user cant be removed from project' => '所选用户无法从工作区中删除',
    'tag dnx' => '请求的标记不存在',
    'no tags used on projects' => '此工作区上没有使用任何标记',
    'no forms in project' => '此工作区中没有表单',
    'project form dnx' => '数据库中不存在请求的工作区表单',
    'related project form object dnx' => '数据库中不存在相关的表单对象',
    'no my tasks' => '没有分配给您的任务',
    'no search result for' => '没有与 "<strong>{0}</strong>"相匹配的对象',
    'no search result' => '空空如也————没有对象',
    'no files on the page' => '此页面上没有文件',
    'folder dnx' => '数据库中不存在您请求的文件夹',
    'define project folders' => '此工作区中没有文件夹。请定义文件夹以便继续',
    'file dnx' => '数据库中不存在请求的文件',
    'not s5 presentation' => '无法启动幻灯片放映，因为该文件不是有效的S5演示文稿',
    'file not selected' => '没有选定的文件',
    'file revision dnx' => '数据库中不存在请求的修订',
    'no file revisions in file' => '无效文件 - 没有与此文件关联的修订',
    'cant delete only revision' => '您不能删除此修订。每个文件都需要至少发布一个修订',
    'config category dnx' => '您请求的配置类别不存在',
    'config category is empty' => '所选配置类别为空',
    'email address not in use' => '{0} 未使用',
    'no linked objects' => '没有对象链接到此对象',
    'object not linked to object' => '所选对象之间不存在链接',
    'no objects to link' => '请选择需要链接的对象',
    'no administration tools' => '数据库中没有注册的管理工具',
    'administration tool dnx' => '管理工具 "{0}" 不存在',
    'document checked out' => '文档已由其他用户checked out签出',
    
    // Success
    'success add contact' => '已成功创建人员 \'{0}\' ',
    'success edit contact' => '已成功更新人员 \'{0}\' ',
    'success delete contact' => '已成功删除人员 \'{0}\' ',
    'success edit picture' => '图片已成功更新',
    'success delete picture' => '图片已成功删除',
    
    'success add project' => '已成功创建项目 {0} ',
    'success edit project' => '已成功更新项目 {0} ',
    'success delete project' => '已成功删除项目 {0} ',
    'success complete project' => '已完成项目 {0} ',
    'success open project' => '已打开项目 {0} ',
    
    'success add milestone' => '已成功创建里程碑 \'{0}\' ',
    'success edit milestone' => '已成功更新程碑 \'{0}\' ',
    'success deleted milestone' => '已成功删除程碑 \'{0}\' ',
    
    'success add message' => '已成功创建便签 {0} ',
    'success edit message' => '已成功更新便签 {0} ',
    'success deleted message' => '便签 \'{0}\' 及其全部评论均已成功删除',
    
    'success add comment' => '评论已成功发布',
    'success edit comment' => '评论已成功更新',
    'success delete comment' => '评论已成功删除',
    
    'success add task list' => '任务 \'{0}\' 已添加',
    'success edit task list' => '任务 \'{0}\' 已更新',
    'success delete task list' => '任务 \'{0}\' 已删除',
    
    'success add task' => '已添加所选任务',
    'success edit task' => '已更新所选任务',
    'success delete task' => '已删除所选任务',
    'success complete task' => '已完成所选任务',
    'success mark as started task' => '所选任务已标记为已启动',
    'success unmark as started task' => '所选任务已取消标记为已启动',
    'success open task' => '所选任务已重新打开',
    'success n tasks updated' => '{0} 任务已更新',
	'success add mail' => '邮件发送成功',
	'success autosave draft' => '草稿自动保存',
    
    'success add client' => '已添加客户公司 {0} ',
    'success edit client' => '已更新客户公司 {0} ',
    'success delete client' => '已删除客户公司 {0} ',
    
    'success add group' => '已添加群组 {0} ',
    'success edit group' => '已添更新群组 {0} ',
    'success delete group' => '已删除群组 {0} ',
  	'no groups in company' => '空空如也————尚未添加任何群组',
    
    'success edit company' => '公司数据已更新',
    'success edit company logo' => '公司LOGO已更新',
    'success delete company logo' => '公司LOGO已删除',
    
    'success add user' => '已成功添加用户 {0} ',
    'success edit user' => '已更新添加用户 {0} ',
    'success delete user' => '已删除添加用户 {0} ',
	'success disable user' => '已成功禁用用户 {0} 的帐户',
	'success restore user' => '已成功启用用户 {0} 的帐户',
    
    'success update project permissions' => '工作区权限已成功更新',
    'success remove user from project' => '用户已成功从工作区中删除',
    'success remove company from project' => '公司已成功从工作区中删除',
    
    'success update profile' => '配置文件已更新',
    'success edit avatar' => '图片已成功更新',
    'success delete avatar' => '图片已成功删除',
    
    'success hide welcome info' => '欢迎信息框已成功隐藏',
    
    'success complete milestone' => '里程碑 \'{0}\' 已完成',
    'success open milestone' => '里程碑 \'{0}\' 已重新打开',
    
    'success subscribe to object' => '您已成功关注此对象',
    'success unsubscribe to object' => '您已成功取消关注此对象',
    
    'success add project form' => '表单 \'{0}\' 已添加',
    'success edit project form' => '表单 \'{0}\' 已更新',
    'success delete project form' => '表单 \'{0}\' 已删除',
    
    'success add folder' => '文件夹 \'{0}\' 已添加',
    'success edit folder' => '文件夹 \'{0}\' 已更新',
    'success delete folder' => '文件夹 \'{0}\' 已删除',
    
    'success add file' => '文件 \'{0}\' 已添加',
	'success save file' => '文件 \'{0}\' 已保存',
    'success edit file' => '文件 \'{0}\' 已更新',
    'success delete file' => '文件 \'{0}\' 已删除',
    'success delete files' => '{0} 文件已删除',
    'success tag files' => '{0} 文件已标记',
    'success tag contacts' => '{0} 人员已标记',
    
    'success add handis' => '讲义已更新',
    
    'success add properties' => 'Properties已更新',
    
    'success edit file revision' => '修订版已更新',
    'success delete file revision' => '文件修订版已删除',
    'success trash file revision' => '文件修订版已丢到垃圾桶',
    
    'success link objects' => '{0} 个对象已成功链接',
    'success unlink object' => '对象已成功取消链接',
    
    'success update config category' => '{0} 配置值已更新',
    'success forgot password' => '指示已通过电子邮件发送给您',
    
    'success test mail settings' => '测试邮件已成功发送',
    'success massmail' => '电子邮件已发送',
    
    'success update company permissions' => '公司权限更新成功。 {0} 条记录已更新',
    'success user permissions updated' => '用户权限已更新',
  
    'success add event' => '事务 \'{0}\' 已添加',
    'success add events' => '已添加事务',
    'success edit event' => 'Event \'{0}\' 已更新',
    'success delete event' => 'Event \'{0}\' 已删除',
    
    'success add event type' => '已添加事务类型',
    'success delete event type' => '已删除事务类型',
    
    'success add webpage' => '已添加链接',
    'success edit webpage' => '已更新链接',
    'success deleted webpage' => '已删除链接',
    
    'success add chart' => '已添加图表',
    'success edit chart' => '已更新图表',
    'success delete chart' => '已删除图表',
    'success delete charts' => '已成功删除所选图表',
  
    'success delete contacts' => '已成功删除所选人员',
  
    'success classify email' => '邮件分类成功',
  	'success classify email in' => '邮件已成功分类在 \'{0}\'中',
    'success delete email' => '邮件删除成功',
  	'success unclassify email' => '电子邮件未分类成功',
  	'error unclassify email' => '无法解除电子邮件分类',
	'success unclassify emails' => "{0} 封未分类的电子邮件成功",
	'error unclassify emails' => "无法解除对 {0} 封电子邮件的分类",
  
    'success delete mail account' => '电子邮件帐户已成功删除',
    'success add mail account' => '电子邮件帐户已成功创建',
    'success edit mail account' => '电子邮件帐户已成功更新',
  
    'success link object' => '对象已成功链接',
  
  	'success check mail' => '电子邮件检索完成：已收到 {0} 封电子邮件。',
  
	'success delete objects' => '{0} 对象删除成功',
	'success tag objects' => '{0} 对象标记成功',
	'error delete objects' => '{0} 对象删除失败',
	'error tag objects' => ' {0} 对象标记失败',
	'success move objects' => '{0} 对象移动成功',
	'error move objects' => ' {0} 对象移动失败',
	'success untag objects' => " {0} 对象移除标记失败",
	'error untag objects' => " {0} 移除对象标记失败",
	'success archive objects' => "{0} 对象归档成功",
	'error archive objects' => " {0} 对象归档失败",
	'success unarchive objects' => "{0} 对象解档成功",
	'error unarchive objects' => " {0} 对象解档失败",
  
    'success checkout file' => '文件已被成功阻止',
    'success checkin file' => '文件已成功checked in签入',
  	'success undo checkout file' => '文件已成功解除阻止',
	'success extracting files' => '{0} 文件已提取',
	'success compressing files' => '{0} 文件压缩成功',
  
	'success add billing category' => '计费类别添加成功',
	'success delete billing category' => '计费类别删除成功',
	'success edit billing category' => '计费类别更新成功',
  	'success assign user billing categories' => '计费类别已成功分配给用户',
  	'success update billing values' => '成功更新了时隙计费值：修改了 {0} 条目。',
    
    // Failures
    'error edit timeslot' => '保存时隙失败',
  	'error delete timeslot' => '删除所选时隙失败',
  	'error add timeslot' => '添加所选时隙失败',
  	'error open timeslot' => '打开所选时隙失败',
  	'error close timeslot' => '关闭所选时隙失败',
    'error start time after end time' => '保存时隙失败：开始时间必须在结束时间之前',
    'error form validation' => '无法保存对象，因为其某些属性无效',
    'error delete owner company' => '无法删除所有者公司',
    'error delete message' => '删除所选便签失败',
    'error update message options' => '无法更新便签选项',
    'error delete comment' => '删除所选评论失败',
    'error delete milestone' => '删除所选里程碑失败',
    'error complete task' => '未能完成所选任务',
    'error open task' => '所选任务重打开失败',
    'error upload file' => '文件上传失败',
    'error delete project' => '删除所选工作区失败',
    'error complete project' => '未能完成所选工作区',
    'error open project' => '所选工作区重打开失败',
    'error delete client' => '删除所选客户公司失败',
    'error delete group' => '删除所选群组失败',
    'error delete user' => '删除所选用户失败',
    'error update project permissions' => '工作区权限更新失败',
    'error remove user from project' => '从工作区移除用户失败',
    'error remove company from project' => '从工作区移除公司失败',
    'error edit avatar' => '编辑图片失败',
    'error delete avatar' => '删除图片失败',
    'error edit picture' => '编辑图片失败',
    'error delete picture' => '删除图片失败',
    'error edit contact' => '编辑联系人失败',
    'error delete contact' => '删除联系人失败',
    'error hide welcome info' => '隐藏欢迎信息失败',
    'error complete milestone' => '未能完成选定的里程碑',
    'error open milestone' => '未能重打开选定的里程碑',
    'error file download' => '无法下载指定的文件',
    'error link object' => '关联对象失败',
    'error edit company logo' => '公司logo更新失败',
    'error delete company logo' => '公司logo删除失败',
    'error subscribe to object' => '无法关注所选对象',
    'error unsubscribe to object' => '无法取消关注所选对象',
    'error add project form' => '未能添加工作区窗体',
    'error submit project form' => '未能提交工作区窗体',
    'error delete folder' => '无法删除所选文件夹',
    'error delete file' => '无法删除所选文件',
    'error delete files' => '无法删除文件 {0} ',
    'error tag files' => '无法标记文件 {0} ',
    'error tag contacts' => '无法标记人员 {0} ',
    'error delete file revision' => '无法删除文件修订版',
    'error delete task list' => '无法删除所选任务',
    'error delete task' => '无法删除所选任务',
    'error check for upgrade' => '检查新版本失败',
    'error link object' => '关联对象失败',
    'error unlink object' => '无法取消关联对象 {0} ',
    'error link objects max controls' => '不能添加更多对象关联。限制为 {0}',
    'error test mail settings' => '发送测试消息失败',
    'error massmail' => '发送电子邮件失败',
    'error owner company has all permissions' => '所有者公司拥有所有权限',
    'error while saving' => '保存文档时出错',
    'error delete event type' =>'未能删除事件类型',
    'error delete mail' => '删除此电子邮件时出错',
    'error delete mail account' => '删除此电子邮件帐户时出错',
    'error delete contacts' => '删除这些人时出错',
  	'error check mail' => '检查帐户 \'{0}\'时出错: {1}',
  	'error check out file' => '签出checking out 文件以供独占使用时出错',
    'error checkin file' => '签入checking in文件时出错',
    'error classifying attachment cant open file' => '分类附件时出错：无法打开文件',
  	'error contact added but not assigned' => '已添加联系人 \'{0}\' 但由于访问权限的原因，未成功分配到工作区 \'{1}\' ',
  	'error cannot set workspace as parent' => '无法将工作区 \'{0}\' 设置为父级，工作区级别过多或循环引用',
  	'error cannot link object to self' => '不能将对象链接到其自身',

  	
    // Access or data errors
    'incorrect date' => '日期不正确',
    'no access permissions' => '您没有访问请求页面的权限',
    'invalid request' => '无效请求！',
    
    // Confirmation
    'confirm delete billing category' => "您确定要删除所选的计费类别吗？",
    'confirm cancel work timeslot' => "您确定要取消当前时隙吗？",
    'confirm discard work timeslot' => '您确定要丢弃当前时隙吗？',
    'confirm delete mail account' => '警告：属于此帐户的所有电子邮件也将被删除，你确定要删除此邮件帐户吗？',
    'confirm delete message' => '您确定要删除此便笺吗？',
    'confirm delete milestone' => '您确定要删除此里程碑吗？',
    'confirm delete task list' => '是否确实要删除此任务及其所有子任务？',
    'confirm delete task' => '您确定要删除此任务吗？',
    'confirm delete comment' => '您确定要删除此评论吗？',
    'confirm delete project' => '是否确实要删除此工作区和所有相关数据（便签、任务、里程碑、文件…）？',
    'confirm complete project' => '是否确实要将此工作区标记为关闭？所有工作区操作都将被锁定',
    'confirm open project' => '是否确实要将此工作区标记为打开？这将解锁所有工作区操作',
    'confirm delete client' => '是否确实要删除选定的客户公司及其所有用户？\n此操作\' 还将删除用户的个人工作区。',
    'confirm delete contact' => '您确定要删除所选联系人吗？',
    'confirm delete user' => '您确定要删除此用户帐户吗？',
   	'confirm disable user'=> '用户将被禁用。继续吗？',
   	'confirm restore user'=> '用户将被启用。继续吗？',
    'confirm reset people form' => '您确定要重置此表单吗？您所做的所有修改都将丢失！',
    'confirm remove user from project' => '是否确实要从此工作区中删除此用户？',
    'confirm remove company from project' => '是否确实要从此工作区中删除此公司？',
    'confirm logout' => '你确定要注销吗？',
    'confirm delete current avatar' => '你确定要删除该图片吗？',
    'confirm unlink object' => '是否确实要取消此对象的链接？',
    'confirm delete company logo' => '您确定要删除此LOGO吗？',
    'confirm subscribe' => '您确定要订阅此对象吗？每次有人（除了你）对此对象发表评论时，你都会收到一封电子邮件。',
    'confirm unsubscribe' => '你确定要取消订阅吗？',
    'confirm delete project form' => '您确定要删除此表单吗？',
    'confirm delete folder' => '您确定要删除此文件夹吗？',
    'confirm delete file' => '您确定要删除此文件吗？',
    'confirm delete revision' => '您确定要删除此修订版吗？',
    'confirm reset form' => '您确定要重置此窗体吗？',
    'confirm delete contacts' => '您确定要重置此人员吗？',
	'confirm delete group' => '您确定要重置此群组吗？',
    
    // Errors...
    'system error message' => '我们很抱歉地告知您，由于系统原因无法执行请求<br />请您与管理员取得联系。<br /><br />若要寻求官方支持，请发邮件给<a href="mailto:contact@fengoffice.com" style="text-decoration:underline;">Feng Office官方</a>或者您也可以加Q群206239089寻求爱好者的帮助。',
    'execute action error message' => '我们很抱歉地告知您，由于系统原因无法执行请求<br />请您与管理员取得联系。<br /><br />若要寻求官方支持，请发邮件给 <a href="mailto:contact@fengoffice.com" style="text-decoration:underline;">Feng Office官方</a>或者您也可以加Q群206239089寻求爱好者的帮助。',
    
    // Log
    'log add projectmessages' => '\'{0}\' 已添加',
    'log edit projectmessages' => '\'{0}\' 已更新',
    'log delete projectmessages' => '\'{0}\' 已删除',
  	'log trash projectmessages' => '\'{0}\' 已移到垃圾桶',
  	'log untrash projectmessages' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive projectmessages' => '\'{0}\' 已归档',
  	'log unarchive projectmessages' => '\'{0}\' 已解档',
  	'log comment projectmessages' => '评论于 \'{0}\'',
  	'log comment projectmessages data' => '评论于 \'{0}\'',
    'log subscribe projectmessages' => '已关注 \'{0}\'',
  	'log subscribe projectmessages data' => '已关注 \'{0}\'',
  	'log unsubscribe projectmessages' => '已取关 \'{0}\'',
    'log tag projectmessages' => '\'{0}\' 已标记',
    'log link projectmessages' => '\'{0}\' 已链接',
    'log unlink projectmessages' => '\'{0}\' 已取消链接',
    'log tag projectmessages data' => '\'{0}\' 标记为 \'{1}\'',
    'log link projectmessages data' => '\'{0}\' 链接到 {1}',
    'log unlink projectmessages data' => '\'{0}\' 从 {1}取消链接',
  
  
  	'log add projectevents' => '\'{0}\' 已添加',
    'log edit projectevents' => '\'{0}\' 已更新',
    'log delete projectevents' => '\'{0}\' 已删除',
  	'log trash projectevents' => '\'{0}\' 已移到垃圾桶',
  	'log untrash projectevents' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive projectevents' => '\'{0}\' 已归档',
  	'log unarchive projectevents' => '\'{0}\' 已解档',
  	'log comment projectevents' => '评论于 \'{0}\'',
  	'log comment projectevents data' => '评论于 \'{0}\'',
  	'log subscribe projectevents' => '已关注 \'{0}\'',
  	'log unsubscribe projectevents' => '已取关 \'{0}\'',
    'log tag projectevents' => '\'{0}\' 已标记',
    'log link projectevents' => '\'{0}\' 已链接',
    'log unlink projectevents' => '\'{0}\' 已取消链接',
    'log tag projectevents data' => '\'{0}\' 标记为 \'{1}\'',
    'log link projectevents data' => '\'{0}\' 链接到 {1}',
    'log unlink projectevents data' => '\'{0}\' 从 {1}取消链接',
    
    'log add comments' => '{0} 已添加',
    'log edit comments' => '{0} 已更新',
    'log delete comments' => '{0} 已删除',
  	'log trash comments' => '\'{0}\' 已移到垃圾桶',
  	'log untrash comments' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive comments' => '\'{0}\' 已归档',
  	'log unarchive comments' => '\'{0}\' 已解档',
  	'log comment comments' => '评论于 \'{0}\'',
  	'log comment comments data' => '评论于 \'{0}\'',
  	'log subscribe comments' => '已关注 \'{0}\'',
  	'log unsubscribe comments' => '已取关 \'{0}\'',
    'log tag comments' => '\'{0}\' 已标记',
    'log link comments' => '\'{0}\' 已链接',
    'log unlink comments' => '\'{0}\' 已取消链接',
    'log tag comments data' => '\'{0}\' 标记为 \'{1}\'',
    'log link comments data' => '\'{0}\' 链接到 {1}',
    'log unlink comments data' => '\'{0}\' 从  {1}取消链接',
    
    'log add projectmilestones' => '\'{0}\' 已添加',
    'log edit projectmilestones' => '\'{0}\' 已更新',
    'log delete projectmilestones' => '\'{0}\' 已删除',
    'log close projectmilestones' => '\'{0}\' 已完成',
    'log open projectmilestones' => '\'{0}\' 已重打开',
  	'log trash projectmilestones' => '\'{0}\' 已移到垃圾桶',
  	'log untrash projectmilestones' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive projectmilestones' => '\'{0}\' 已归档',
  	'log unarchive projectmilestones' => '\'{0}\' 已解档',
  	'log comment projectmilestones' => '评论于 \'{0}\'',
  	'log comment projectmilestones data' => '评论于 \'{0}\'',
  	'log subscribe projectmilestones' => '已关注 \'{0}\'',
  	'log unsubscribe projectmilestones' => '已取关 \'{0}\'',
    'log tag projectmilestones' => '\'{0}\' 已标记',
    'log link projectmilestones' => '\'{0}\' 已链接',
    'log unlink projectmilestones' => '\'{0}\' 已取消链接',
    'log tag projectmilestones data' => '\'{0}\' 已标记为 \'{1}\'',
    'log link projectmilestones data' => '\'{0}\' 已链接到 {1}',
    'log unlink projectmilestones data' => '\'{0}\' 已取消链接从  {1}',
    
    'log add projecttasklists' => '\'{0}\' 已添加',
    'log edit projecttasklists' => '\'{0}\' 已更新',
    'log delete projecttasklists' => '\'{0}\' 已删除',
    'log close projecttasklists' => '\'{0}\' 已关闭',
    'log open projecttasklists' => '\'{0}\' 已打开',
  	'log trash projecttasklists' => '\'{0}\' 已移到垃圾桶',
  	'log untrash projecttasklists' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive projecttasklists' => '\'{0}\' 已归档',
  	'log unarchive projecttasklists' => '\'{0}\' 已解档',
  	'log comment projecttasklists' => '评论于 \'{0}\'',
  	'log comment projecttasklists data' => '评论于 \'{0}\'',
  	'log subscribe projecttasklists' => '已关注 \'{0}\'',
  	'log unsubscribe projecttasklists' => '已取关 \'{0}\'',
    'log tag projecttasklists' => '\'{0}\' 已标记',
    'log link projecttasklists' => '\'{0}\' 已链接',
    'log unlink projecttasklists' => '\'{0}\' 已取消链接',
    'log tag projecttasklists data' => '\'{0}\' 已标记为 \'{1}\'',
    'log link projecttasklists data' => '\'{0}\' 已链接到 {1}',
    'log unlink projecttasklists data' => '\'{0}\' 已取消链接从  {1}',
    
    'log add projecttasks' => '\'{0}\' 已添加',
    'log edit projecttasks' => '\'{0}\' 已更新',
    'log delete projecttasks' => '\'{0}\' 已删除',
    'log close projecttasks' => '\'{0}\' 已关闭',
    'log open projecttasks' => '\'{0}\' 已打开',
  	'log trash projecttasks' => '\'{0}\' 已移到垃圾桶',
  	'log untrash projecttasks' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive projecttasks' => '\'{0}\' 已归档',
  	'log unarchive projecttasks' => '\'{0}\' 已解档',
  	'log comment projecttasks' => '评论于 \'{0}\'',
  	'log comment projecttasks data' => '评论于 \'{0}\'',
  	'log subscribe projecttasks' => '已关注 \'{0}\'',
  	'log unsubscribe projecttasks' => '已取关 \'{0}\'',
    'log tag projecttasks' => '\'{0}\' 已标记',
    'log link projecttasks' => '\'{0}\' 已链接',
    'log unlink projecttasks' => '\'{0}\' 已取消链接',
    'log tag projecttasks data' => '\'{0}\' 已标记为 \'{1}\'',
    'log link projecttasks data' => '\'{0}\' 已链接到 {1}',
    'log unlink projecttasks data' => '\'{0}\' 已取消链接从  {1}',    
    
    'log add projectforms' => '\'{0}\' 已添加',
    'log edit projectforms' => '\'{0}\' 已更新',
    'log delete projectforms' => '\'{0}\' 已删除',
  	'log trash projectforms' => '\'{0}\' 已移到垃圾桶',
  	'log untrash projectforms' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive projectforms' => '\'{0}\' 已归档',
  	'log unarchive projectforms' => '\'{0}\' 已解档',
  	'log comment projectforms' => '评论于 \'{0}\'',
  	'log comment projectforms data' => '评论于 \'{0}\'',
  	'log subscribe projectforms' => '已关注 \'{0}\'',
  	'log unsubscribe projectforms' => '已取关 \'{0}\'',
    'log tag projectforms' => '\'{0}\' 已标记',
    'log link projectforms' => '\'{0}\' 已链接',
    'log unlink projectforms' => '\'{0}\' 已取消链接',
    'log tag projectforms data' => '\'{0}\' 已标记为 \'{1}\'',
    'log link projectforms data' => '\'{0}\' 已链接到 {1}',
    'log unlink projectforms data' => '\'{0}\' 已取消链接从  {1}',
    
    'log add projectfolders' => '\'{0}\' 已添加',
    'log edit projectfolders' => '\'{0}\' 已更新',
    'log delete projectfolders' => '\'{0}\' 已删除',
  	'log comment projectfolders' => '评论于 \'{0}\'',
  	'log comment projectfolders data' => '评论于 \'{0}\'',
  	'log subscribe projectfolders' => '已关注 \'{0}\'',
  	'log unsubscribe projectfolders' => '已取关 \'{0}\'',
    'log tag projectfolders' => '\'{0}\' 已标记',
    'log link projectfolders' => '\'{0}\' 已链接',
    'log unlink projectfolders' => '\'{0}\' 已取消链接',
    'log tag projectfolders data' => '\'{0}\' 已标记为 \'{1}\'',
    'log link projectfolders data' => '\'{0}\' 已链接到 {1}',
    'log unlink projectfolders data' => '\'{0}\' 已取消链接从  {1}',
    
    'log add projectfiles' => '\'{0}\' 已上传',
    'log edit projectfiles' => '\'{0}\' 已更新',
    'log delete projectfiles' => '\'{0}\' 已删除',
  	'log trash projectfiles' => '\'{0}\' 已移到垃圾桶',
  	'log untrash projectfiles' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive projectfiles' => '\'{0}\' 已归档',
  	'log unarchive projectfiles' => '\'{0}\' 已解档',
  	'log comment projectfiles' => '评论于 \'{0}\'',
  	'log comment projectfiles data' => '评论于 \'{0}\'',
  	'log subscribe projectfiles' => '已关注 \'{0}\'',
  	'log subscribe projectfiles data' => '已关注 \'{0}\'',
  	'log unsubscribe projectfiles' => '已取关 \'{0}\'',
    'log tag projectfiles' => '\'{0}\' 已标记',
    'log link projectfiles' => '\'{0}\' 已链接',
    'log unlink projectfiles' => '\'{0}\' 已取消链接',
    'log tag projectfiles data' => '\'{0}\' 已标记为 \'{1}\'',
    'log link projectfiles data' => '\'{0}\' 已链接到 {1}',
    'log unlink projectfiles data' => '\'{0}\' 已取消链接从  {1}',
    
    'log edit projectfilerevisions' => '{0} 已更新',
    'log delete projectfilerevisions' => '{0} 已删除',
  	'log trash projectfilerevisions' => '\'{0}\' 已移到垃圾桶',
  	'log untrash projectfilerevisions' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive projectfiles' => '\'{0}\' 已归档',
  	'log unarchive projectfiles' => '\'{0}\' 已解档',
  	'log comment projectfilerevisions' => '评论于 \'{0}\'',
  	'log comment projectfilerevisions data' => '评论于 \'{0}\'',
  	'log subscribe projectfilerevisions' => '已关注 \'{0}\'',
  	'log unsubscribe projectfilerevisions' => '已取关 \'{0}\'',
    'log tag projectfilerevisions' => '\'{0}\' 已标记',
    'log link projectfilerevisions' => '\'{0}\' 已链接',
    'log unlink projectfilerevisions' => '\'{0}\' 已取消链接',
    'log tag projectfilerevisions data' => '\'{0}\' 已标记为 \'{1}\'',
    'log link projectfilerevisions data' => '\'{0}\' 已链接到 {1}',
    'log unlink projectfilerevisions data' => '\'{0}\' 已取消链接从  {1}',
    
    'log add projectwebpages' => '\'{0}\' 已添加',
    'log edit projectwebpages' => '\'{0}\' 已更新',
    'log delete projectwebpages' => '\'{0}\' 已删除',
  	'log trash projectwebpages' => '\'{0}\' 已移到垃圾桶',
  	'log untrash projectwebpages' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive projectwebpages' => '\'{0}\' 已归档',
  	'log unarchive projectwebpages' => '\'{0}\' 已解档',
  	'log comment projectwebpages' => '评论于 \'{0}\'',
  	'log comment projectwebpages data' => '评论于 \'{0}\'',
  	'log subscribe projectwebpages' => '已关注\'{0}\'',
  	'log unsubscribe projectwebpages' => '已取关 \'{0}\'',
    'log tag projectwebpages' => '\'{0}\' 已标记',
    'log link projectwebpages' => '\'{0}\' 已链接',
    'log unlink projectwebpages' => '\'{0}\' 已取消链接',
    'log tag projectwebpages data' => '\'{0}\' 已标记为 \'{1}\'',
    'log link projectwebpages data' => '\'{0}\' 已链接到 {1}',
    'log unlink projectwebpages data' => '\'{0}\' 已取消链接从  {1}',
    
    'log add contacts' => '\'{0}\' 已添加',
    'log edit contacts' => '\'{0}\' 已更新',
    'log delete contacts' => '\'{0}\' 已删除',
  	'log trash contacts' => '\'{0}\' 已移到垃圾桶',
  	'log untrash contacts' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive contacts' => '\'{0}\' 已归档',
  	'log unarchive contacts' => '\'{0}\' 已解档',
  	'log comment contacts' => '评论于 \'{0}\'',
  	'log comment contacts data' => '评论于 \'{0}\'',
  	'log subscribe contacts' => '已关注 \'{0}\'',
  	'log unsubscribe contacts' => '已取关 \'{0}\'',
    'log tag contacts' => '\'{0}\' 已标记',
    'log link contacts' => '\'{0}\' 已链接',
    'log unlink contacts' => '\'{0}\' 已取消链接',
    'log tag contacts data' => '\'{0}\' 已标记为 \'{1}\'',
    'log link contacts data' => '\'{0}\' 已链接到 {1}',
    'log unlink contacts data' => '\'{0}\' 已取消链接从  {1}',
  
  	'no contacts in company' => '空空如也————这家公司还没有人员。',
  
  	'session expired error' => '会话已过期。请刷新页面并再次登录。',
  	'admin cannot be removed from admin group' => '无法从管理员组中删除第一个用户',
  	'open this link in a new window' => '在新窗口中打开此链接',
  
  	'confirm delete template' => '您确定要删除该模板吗？',
  	'success delete template' => '模板 \'{0}\' 已删除',
  	'success add template' => '模板已删除',
  
  	'log add companies' => '\'{0}\' 已添加',
  	'log edit companies' => '\'{0}\' 已更新',
  	'log delete companies' => '\'{0}\' 已删除',
  	'log trash companies' => '\'{0}\' 已移到垃圾桶',
  	'log untrash companies' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive companies' => '\'{0}\' 已归档',
  	'log unarchive companies' => '\'{0}\' 已解档',
  	'log comment companies' => '评论于 \'{0}\'',
  	'log comment companies data' => '评论于 \'{0}\'',
  	'log subscribe companies' => '已关注 \'{0}\'',
  	'log unsubscribe companies' => '已取关 \'{0}\'',
    'log tag companies' => '\'{0}\' 已标记',
    'log link companies' => '\'{0}\' 已链接',
    'log unlink companies' => '\'{0}\' 已取消链接',
    'log tag companies data' => '\'{0}\' 已标记为 \'{1}\'',
    'log link companies data' => '\'{0}\' 已链接到 {1}',
    'log unlink companies data' => '\'{0}\' 已取消链接从  {1}',
  
  	'log add mailcontents' => '\'{0}\' 已添加',
  	'log edit mailcontents' => '\'{0}\' 已更新',
  	'log delete mailcontents' => '\'{0}\' 已删除',
  	'log trash mailcontents' => '\'{0}\' 已移到垃圾桶',
  	'log untrash mailcontents' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive mailcontents' => '\'{0}\' 已归档',
  	'log unarchive mailcontents' => '\'{0}\' 已解档',
  	'log comment mailcontents' => '评论于 \'{0}\'',
  	'log comment mailcontents data' => '评论于 \'{0}\'',
  	'log subscribe mailcontents' => '已关注 \'{0}\'',
  	'log unsubscribe mailcontents' => '已取关 \'{0}\'',
    'log tag mailcontents' => '\'{0}\' 已标记',
    'log link mailcontents' => '\'{0}\' 已链接',
    'log unlink mailcontents' => '\'{0}\' 已取消链接',
    'log tag mailcontents data' => '\'{0}\' 已标记为 \'{1}\'',
    'log link mailcontents data' => '\'{0}\' 已链接到 {1}',
    'log unlink companies data' => '\'{0}\' 已取消链接从  {1}',
  
  	'log open timeslots' => '\'{0}\' 已打开',
    'log close timeslots' => '\'{0}\' 已关闭',
    'log delete timeslots' => '\'{0}\' 已删除',
  	'log trash timeslots' => '\'{0}\' 已移到垃圾桶',
  	'log untrash timeslots' => '\'{0}\' 已从垃圾桶恢复',
  	'log archive timeslots' => '\'{0}\' 已归档',
  	'log unarchive timeslots' => '\'{0}\' 已解档',
  
  	'log login users data' => '用户 {0} 登陆 IP: {1}',
  	'log login users' => '用户 {0} 已登陆',
    'log logout users data' => '用户 {0} 已注销',  
    'log edit users' => '用户 {0} 已编辑',
  	'log delete users' => '用户 {0} 已删除',
  	'log add users' => '用户 {0} added',
  	'log login contact data' => '用户 {0} 登陆 IP: {1}',
  	'log login contact' => '用户 {0} 已登陆',
    'log logout contact data' => '用户 {0} 已注销',  
    'log edit contact' => '用户 {0} 已编辑',
  	'log delete contact' => '用户 {0} 已删除',
  	'log add contact' => '用户 {0} 已添加',
  
  	'log read projectfiles' => '查看 \'{0}\'',
  	'log download projectfiles' => '下载 \'{0}\'',
  	'log read projectmessages' => '查看 \'{0}\'',
  	'log read mailcontents' => '查看 \'{0}\'',
  	'log read companies' => '查看 \'{0}\'',
  	'log read company' => '查看 \'{0}\'',
  	'log read contacts' => '查看 \'{0}\'',
  	'log read contact' => '查看 \'{0}\'',
  	'log read projectevents' => '查看 \'{0}\'',
  	'log read projecttasks' => '查看 \'{0}\'',
  	'log read projectmilestones' => '查看 \'{0}\'',
  	'log read projectwebpages' => '查看 \'{0}\'',
  	'log read reports' => '查看 \'{0}\'',
    'log read invoice' => '查看 \'{0}\'',
    
  
  	'error assign workspace' => '未能将模板分配给工作区',
  	'success assign workspaces' => '已成功将模板分配到工作区',
  	'success update config value' => '配置值已更新',
  	'view open tasks' => '打开任务',
  	'already logged in' => '您已登录',
  
	'some tasks could not be updated due to permission restrictions' => '由于权限限制，某些任务无法更新',
  
  	'success trash object' => '对象已成功移到垃圾桶',
  	'error trash object' => '无法将对象移到垃圾桶',
	'success untrash object' => '已成功从垃圾桶中还原对象',
  	'error untrash object' => '无法从垃圾桶中还原对象',
  	'success trash objects' => '{0} 对象已成功移动到垃圾桶',
  	'error trash objects' => '无法将 {0} 对象移动到垃圾桶',
  	'success markasread objects' => '标记为已成功读取的{0} 对象',
  	'error markasread objects' => '未能将 {0} 对象标记为已读',
  	'success markasunread objects' => '成功将对象 {0} 标记为未读',
  	'error markasunread objects' => '未能将 {0} 对象标记为未读',
	'success untrash objects' => '已成功从垃圾桶中还原 {0}',
  	'error untrash objects' => '无法从垃圾桶中还原 {0} ',
	'success delete object' => '对象删除成功',
  	'error delete object' => '对象删除失败',
  	

  	'recipient must be specified' => '必须指定电子邮件收件人',
	'mail is being sent' => '邮件发送中...',

  	'copied from file' => '从文件 {0} ({1})复制',

	'check file name advice' => '更改文件名后，按TAB键执行文件名检查，保存按钮将启用。',
	'filename already exists' => '文件名已被另一个文件使用',

  	'success purging trash' => '{0} 对象已删除。',
  	'success sending reminders' => '{0} 提醒已发送。',
  	'failed to assign contact due to permissions' => '您没有在以下工作区中创建或编辑人员的权限： {0}',
  
  	'weblink dnx' => '请求的链接不存在。',
  	'webpage dnx' => '请求的链接不存在。',
  
  	'success markasread files' => '标为已读',
  	'success markasunread files' => '标为未读',
  	'error markasread files' => '未能标为已读',
  	'error markasunread files' => '未能标为未读',
  
	'some objects could not be linked' => '由于权限限制，无法关联对象{0} ',
  	'user cannot link objects' => '您没有足够的权限将对象关联到此对象',
  	'ie browser outdated' => '您的浏览器不受官方支持。为了获得更好的体验，请升级您的浏览器。',
  	'outbox mail not sent' => '您的发件箱文件夹中仍有待发邮件 {0} ',
  	'outbox mails not sent' => '您的发件箱文件夹中仍有待发邮件 {0} ',
  
    'short search query warning' => '您的搜索查询太过少了。您可以尝试搜索 "<b>{0}*星号</b>" 开头的单词进行查找 "<b>{0}</b>"。',
  	'no attachments found for email' => '未找到电子邮件的附件',
  
  	'success reset gui state' => '用户界面重置成功',
	'reset gui state' => '重置用户界面',
  
  	'success mark as spam' => '{0} 邮件已移至垃圾邮件',
  	'error mark as spam' => '将 {0} 移至垃圾邮件出错了',
  	'success mark as ham' => '从垃圾邮件中删除邮件{0} ',
  	'error mark as ham' => '从垃圾邮件中删除邮件 {0} 出错了',
  
  	'object is deleted' => ' (该对象已被删除)',  	
        'the Users' => '用户',
  	'the Comments' => '评论',
  	'the Companies' => '公司',
  	'the Contacts' => '联系人',
  	'the MailContents' => '邮件',
  	'the ProjectEvents' => '事务',
  	'the ProjectFileRevisions' => '文件修订版',
  	'the ProjectFiles' => '文件',
  	'the ProjectMessages' => '便签',
	'the ProjectMilestones' => '里程碑',
  	'the Projects' => '工作区',
  	'the ProjectTasks' => '任务',
  	'the ProjectWebpages' => '主页',
  	'the Timeslots' => '时隙',
        'the Time' => '时隙',
      
        'the user notification' => '用户',
  	'the comment notification' => '评论',
  	'the company notification' => '公司',
  	'the contact notification' => '联系人',
  	'the mail notification' => '邮件',
  	'the event notification' => '事务',
  	'the file notification' => '文件',
  	'the message notification' => '便签',
	'the milestone notification' => '里程碑',
  	'the task notification' => '任务',
  	'the webpage notification' => '主页',
    'the weblink notification' => '链接',
  	'the timeslot notification' => '时隙',
        'the time notification' => '时隙',
  
  	'objects moved to member success' => '对象已成功添加到 {0} ',
	'object moved to member success' => '该对象已成功添加到 {0} ',
  	'objects removed from' => '您已成功从所选对象中删除 {0} ',
  	'object removed from' => '您已成功从所选对象中删除 {0} ',
  	'contact email is required to create user' => '为了创建用户，联系人必须有一个电子邮件地址。请编辑联系人并重试',
  	'success delete member' => '{0} 已删除',
  	'disable' => '不激活',
  	'and xx more' => '和 {0} 更多。',
  	
  	'all previous tasks have been completed' => ' \'{0}\' 以前的所有任务都已完成',
  	'task x can be started' => '以前的所有任务都已完成。现在可以启动任务 \'{0}\' 。',
  	
  	'permissions successfully saved' => '权限保存成功',
  	
  	'cannot delete file' => '您没有删除文件 \'{0}\'的权限',
      
      'success created token' => 'Token 令牌创建成功',
      'success edited token' => 'Token 令牌编辑成功',
      'success deleted token' => 'Token 令牌删除成功',
      'config_start_calc'=>'移动开始日期/时间',
      'config_end_calc'=>'移动结束日期/时间',
      'config_dates_calc'=>'移动相反的日期 (保持相同的输入时间)',
      'config_hours_calc'=>'更改工作时间',
      'always_show_modal'=>'每次都问我',
      'How should we adjust'=>'我们应该如何调整？',
      'Did you start sooner'=>'你开始得早吗？',
      'Did you end later'=>'你结束得晚了吗？',
      'You changed the length of your time record'=>'您更改了时间记录的长度',
      'You changed a date in your time record'=>'您更改了时间记录中的日期',
      'Did you start later'=>'你开始得迟了吗？',
      'Did you end sooner'=>'您结束得早了吗？',

      'What do you prefer' => '你喜欢什么？',

      'Did you want change the date value'=>'您想更改日期值吗？',
      'Did you want change the time value'=>'您想更改时间值吗？',

      'Remember my selection' => '记住我的选择',
      'accept'=>'接受',
      'not classified here'=>'此处未分类',

  	'x members deleted' => '{1} {0} 已成功删除。',
  	'x members deleted y members not deleted' => '{1} {0} 已成功删除, {2} {0} 未删除。',
    'project and client are not associated with each other' => '项目和客户彼此不关联',
    'client is not assigned' => '未分配客户'
  ); // array

?>