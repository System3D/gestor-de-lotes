<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbcjtcronoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbcjtcrono', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('fklote')->unsigned()->nullable();
            $table->integer('fkobra')->unsigned()->nullable();

            // $table->tinyInteger('pcp')->nullable();
            $table->date('dataprev_pcp')->nullable();
            $table->date('datareal_pcp')->nullable();

            // $table->tinyInteger('preparacao')->nullable();
            $table->date('dataprev_preparacao')->nullable();
            $table->date('datareal_preparacao')->nullable();

            // $table->tinyInteger('gabarito')->nullable();
            $table->date('dataprev_gabarito')->nullable();
            $table->date('datareal_gabarito')->nullable();
            
            // $table->tinyInteger('solda')->nullable();
            $table->date('dataprev_solda')->nullable();
            $table->date('datareal_solda')->nullable();
            
            // $table->tinyInteger('pintura')->nullable();
            $table->date('dataprev_pintura')->nullable();
            $table->date('datareal_pintura')->nullable();
            
            // $table->tinyInteger('expedicao')->nullable();
            $table->date('dataprev_expedicao')->nullable();
            $table->date('datareal_expedicao')->nullable();
            
            // $table->tinyInteger('montagem')->nullable();
            $table->date('dataprev_montagem')->nullable();
            $table->date('datareal_montagem')->nullable();
            
            // $table->tinyInteger('entrega')->nullable();
            $table->date('dataprev_entrega')->nullable();
            $table->date('datareal_entrega')->nullable();

            $table->integer('fkpeca')->unsigned()->nullable(); // TB HANDLE
            
            $table->integer('status')->nullable();

            $table->integer('fketapa')->unsigned()->nullable();
            
            $table->integer('pcp_qtd')->nullable();
            $table->integer('preparacao_qtd')->nullable();
            $table->integer('gabarito_qtd')->nullable();
            $table->integer('solda_qtd')->nullable();
            $table->integer('pintura_qtd')->nullable();
            $table->integer('expedicao_qtd')->nullable();
            $table->integer('montagem_qtd')->nullable();
            $table->integer('entrega_qtd')->nullable();
            
            $table->integer('fkmedicoes')->unsigned()->nullable();
            
            $table->timestamps();
        });
        
        Schema::table('tbcjtcrono', function (Blueprint $table) {
            // $table->foreign('fklote')
            //       ->references('id')->on('tblote')
            //       ->onDelete('set null');
            // $table->foreign('fkobra')
            //       ->references('id')->on('tbobras')
            //       ->onDelete('set null');
            // $table->foreign('fkpeca')
            //       ->references('id')->on('tbhandle')
            //       ->onDelete('set null');
            // $table->foreign('fketapa')
            //       ->references('id')->on('tbetapa')
            //       ->onDelete('set null');
            // $table->foreign('fkmedicoes')
            //       ->references('id')->on('tbmedicoes')
            //       ->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbcjtcrono', function (Blueprint $table) {
            // $table->dropForeign('tbcjtcrono_fkmedicoes_foreign');
        });
        Schema::drop('tbcjtcrono');
    }
}
