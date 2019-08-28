<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getWorkflowId() 获取工作流 ID。
 * @method void setWorkflowId(integer $WorkflowId) 设置工作流 ID。
 * @method string getWorkflowName() 获取工作流名称，最多128字符。同一个用户该名称唯一。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称，最多128字符。同一个用户该名称唯一。
 * @method WorkflowTrigger getTrigger() 获取工作流绑定的触发规则，当上传视频命中该规则到该对象时即触发工作流。
 * @method void setTrigger(WorkflowTrigger $Trigger) 设置工作流绑定的触发规则，当上传视频命中该规则到该对象时即触发工作流。
 * @method TaskOutputStorage getOutputStorage() 获取视频处理的文件输出配置。不填则继承 Trigger 中的存储位置。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置视频处理的文件输出配置。不填则继承 Trigger 中的存储位置。
 * @method string getOutputDir() 获取视频处理生成的文件输出的目标目录，如`/movie/201907/`。如果不填，表示与触发文件所在的目录一致，即`{inputDir}`。
 * @method void setOutputDir(string $OutputDir) 设置视频处理生成的文件输出的目标目录，如`/movie/201907/`。如果不填，表示与触发文件所在的目录一致，即`{inputDir}`。
 * @method MediaProcessTaskInput getMediaProcessTask() 获取视频处理类型任务参数。
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) 设置视频处理类型任务参数。
 * @method integer getTaskPriority() 获取任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method void setTaskPriority(integer $TaskPriority) 设置任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method TaskNotifyConfig getTaskNotifyConfig() 获取任务的事件通知信息，不填代表不获取事件通知。
 * @method void setTaskNotifyConfig(TaskNotifyConfig $TaskNotifyConfig) 设置任务的事件通知信息，不填代表不获取事件通知。
 */

/**
 *ResetWorkflow请求参数结构体
 */
class ResetWorkflowRequest extends AbstractModel
{
    /**
     * @var integer 工作流 ID。
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称，最多128字符。同一个用户该名称唯一。
     */
    public $WorkflowName;

    /**
     * @var WorkflowTrigger 工作流绑定的触发规则，当上传视频命中该规则到该对象时即触发工作流。
     */
    public $Trigger;

    /**
     * @var TaskOutputStorage 视频处理的文件输出配置。不填则继承 Trigger 中的存储位置。
     */
    public $OutputStorage;

    /**
     * @var string 视频处理生成的文件输出的目标目录，如`/movie/201907/`。如果不填，表示与触发文件所在的目录一致，即`{inputDir}`。
     */
    public $OutputDir;

    /**
     * @var MediaProcessTaskInput 视频处理类型任务参数。
     */
    public $MediaProcessTask;

    /**
     * @var integer 任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     */
    public $TaskPriority;

    /**
     * @var TaskNotifyConfig 任务的事件通知信息，不填代表不获取事件通知。
     */
    public $TaskNotifyConfig;
    /**
     * @param integer $WorkflowId 工作流 ID。
     * @param string $WorkflowName 工作流名称，最多128字符。同一个用户该名称唯一。
     * @param WorkflowTrigger $Trigger 工作流绑定的触发规则，当上传视频命中该规则到该对象时即触发工作流。
     * @param TaskOutputStorage $OutputStorage 视频处理的文件输出配置。不填则继承 Trigger 中的存储位置。
     * @param string $OutputDir 视频处理生成的文件输出的目标目录，如`/movie/201907/`。如果不填，表示与触发文件所在的目录一致，即`{inputDir}`。
     * @param MediaProcessTaskInput $MediaProcessTask 视频处理类型任务参数。
     * @param integer $TaskPriority 任务流的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     * @param TaskNotifyConfig $TaskNotifyConfig 任务的事件通知信息，不填代表不获取事件通知。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = new WorkflowTrigger();
            $this->Trigger->deserialize($param["Trigger"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("MediaProcessTask",$param) and $param["MediaProcessTask"] !== null) {
            $this->MediaProcessTask = new MediaProcessTaskInput();
            $this->MediaProcessTask->deserialize($param["MediaProcessTask"]);
        }

        if (array_key_exists("TaskPriority",$param) and $param["TaskPriority"] !== null) {
            $this->TaskPriority = $param["TaskPriority"];
        }

        if (array_key_exists("TaskNotifyConfig",$param) and $param["TaskNotifyConfig"] !== null) {
            $this->TaskNotifyConfig = new TaskNotifyConfig();
            $this->TaskNotifyConfig->deserialize($param["TaskNotifyConfig"]);
        }
    }
}