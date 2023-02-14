<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\assets\JqueryUiAsset;

JqueryUiAsset::register($this);

$this->registerJsFile(
    '@web/js/main.js',
    ['depends' => [\yii\web\JqueryAsset::class]]
);
?>

<div>

    <div class="box" class="position-relative">
        <div id="image-preview" src="#" alt="Preview"></div>
        <div id="output-container">
            <div id="text-container" class="position-absolute"></div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">

                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                <?php echo Html::fileInput('imageFile', null, ['id' => 'image-file', 'class' => 'form-control form-control-sm']); ?>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-8">
                        <input type="text" id="text-input" class="form-control form-control-sm" placeholder="Enter text here">
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="button-submit" class="btn btn-primary btn-sm">Add Text</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-4">
                        <input type="color" id="color-select" class="form-control">
                    </div>
                    <div class="col-sm-8">
                        <select id="font-select" class="form-control form-control-sm">
                            <option value="">--Select Font--</option>
                            <option value="Arial">Arial</option>
                            <option value="Times New Roman">Times New Roman</option>
                            <option value="Courier New">Courier New</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>