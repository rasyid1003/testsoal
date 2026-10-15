<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
return new class extends Migration { 
    public function up(): void { 
        Schema::create('siswas', function (Blueprint $table) { 
            $table->string('nis', 20)->primary(); 
            $table->string('nama', 50); 
            $table->string('alamat', 100); 
            $table->timestamps(); 
        }); 
        Schema::create('mata_pelajarans', function (Blueprint $table) { 
            $table->id('id_matpel'); 
            $table->string('nama_matpel', 50); 
            $table->timestamps(); 
        }); 
        Schema::create('ujians', function (Blueprint $table) { 
            $table->id('id_ujian'); 
            $table->string('nama_ujian', 50); 
            $table->foreignId('id_matpel')->constrained('mata_pelajarans', 'id_matpel'); 
            $table->dateTime('tanggal'); 
            $table->timestamps(); 
        }); 
        Schema::create('pesertas', function (Blueprint $table) { 
            $table->id(); 
            $table->foreignId('id_ujian')->constrained('ujians', 'id_ujian'); 
            $table->string('nis', 20); 
            $table->foreign('nis')->references('nis')->on('siswas'); 
            $table->decimal('nilai', 5, 2)->nullable(); 
            $table->enum('status_lulus', ['Lulus', 'Gagal'])->nullable(); 
            $table->timestamps(); 
        }); 
    } 
    public function down(): void { 
        Schema::dropIfExists('pesertas'); Schema::dropIfExists('ujians'); Schema::dropIfExists('mata_pelajarans'); Schema::dropIfExists('siswas'); 
    } 
}; 
