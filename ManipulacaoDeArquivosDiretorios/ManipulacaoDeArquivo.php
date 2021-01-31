<?php
################################################
#                     Fopen                    #
################################################

/**
 * Abre um arquivo e retorna um identificador. Se o nome do arquivo
 * esta na forma "protocolo://", o php irá procurar por um manipulador
 * de protocolo, tambem conhecido como wrapper, conforme o prefixo
 *
 * Arquivo -> sring identificando o nome do arquivo a ser aberto
 * Modo -> Forma de abertura do arquivo (r=read, w=write, a=append)
 * Usar_path -> se 1 ou TRUE, vascula o path pelo arquivo a ser aberto
 * Contexto -> Opções de contexto. variavem de acordo com o protocolo do arquivo
 *
 * int fopen (string arquivo, string modo [, int usar_path[, resource contexto]])
 */

//$fb = fopen("/home/dados/file.txt", "r");


################################################
#                     Feof                     #
################################################

/**
 * Testa se um determinado identificador de arquivo (criado pela função fopen())
 * está no fim de arquivo (End Of File). Retorna TRUE se o ponteiro estiver no
 * fim do arquivo (EOF) do contrário, retorna FALSE
 *
 * int feof (int Identificador)
 */


################################################
#                     fgets                    #
################################################

/**
 * Lê uma linha de um arquivo. Retorna uma string com até (tamanho - 1) bytes
 * lidos do arquivo apontado pelo identificador de arquivo. Se nenhum tamanho for
 * informado, o default é 1kb ou 1024 byte. Se um erro ocorrer, retorna false
 *
 * string fgets(int identificador [, int tamanho])
 */


################################################
#                     fcloe                    #
################################################

/**
 * Fecha o arquivo apontado pelo identificador de arquivo. Retorna TRUE em
 * caso de sucesso ou false em caso de falha
 *
 * bool fclose (int Identificador)
 */


################################################
#                file_put_contents             #
################################################

/**
 * Grava uma string em um arquivo. Retorna a quantidade de bytes gravos
 *
 * int file_put_contents (string nome_arquivo, mixed conteúdo)
 */




################################################
#               file_get_contents              #
################################################

/**
 * Lê o conteudo de um arquivo e retorna o conteúdo em forma de string
 *
 * string file_get_contents (string nome_arquivo)
 */

################################################
#                  File                        #
################################################

/**
 * Lê um arquivo e retorna um array, com todo seu  conteudo, de modo
 * que cada posição do array representa uma linha lida do arquivo.
 *
 * array file (string nome_arquivo, [int usar_include_path])
 */


################################################
#                 copy                         #
################################################

/**
 * Copia um arquivo para outro local/nome. Retorna True caso tenha sucedido e
 * False em caso de falhas
 *
 * bool copy (string arquivo_origem, string arquivo destino)
 */

################################################
#                Rename                        #
################################################

/**
 * Altera o nomeclatura de um arquivo ou dirétorio
 *
 * bool rename (string arquivo_origim, string arquivo_destino)
 */


################################################
#                Unlink                        #
################################################

/**
 * Apaga um arquivo passado parâmetro. Retorna TRUE em caso de sucesso
 * e FALSE em caso de falhar
 *
 * bool unlink (string nome_arquivo)
 */


################################################
#                file_exists                   #
################################################

/**
 * Verificar a existencia de um arquivo ou de um diretorio
 *
 * boll file_exists (String nome_arquivo)
 */


################################################
#                is_file                       #
################################################

/**
 * verificar se a localização dada corresponde ou não a um arquivo
 */

################################################
#                mkdir                        #
################################################

/**
 * Criar um diretorio
 *
 * bool mkdir (string localização, [int modo])
 */

################################################
#                getcwd                        #
################################################

/**
 *  Retorna o diretorio corrente
 *
 * string  getcwd()
 */


################################################
#                chdir                         #
################################################

/**
 * Altera o diretorio corrente. Retorna TRUE em caso de
 * sucesso e FALSE em caso de falhas
 *
 * bool chdir (string localização)
 */


################################################
#                rmdir                         #
################################################

/**
 * Apaga um diretorio
 *
 * rmdir (string localização)
 */


################################################
#                opendir                       #
################################################

/**
 * Abre um diretorio e retorna um identificador
 *
 * resource opendir (string nome_diretorio)
 */


################################################
#                closedir                      #
################################################

/**
 * Libera um recurso alocado pela função opendir()
 *
 * void closedir (resource identificador)
 */

################################################
#                readdir                       #
################################################

/**
 * Realiza a leitura do conteudo de um diretorio por meio
 * do identificador criado pela função opendir
 *
 * string readdir (resource identificador)
 */