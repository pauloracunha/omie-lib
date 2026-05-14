<?php

namespace OmieLib\Financas\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Resumo\Request\ObterDetalhesLancamentoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaEmAbertoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaFinancasRequest;
use OmieLib\Financas\Resumo\Request\ObterResumoFinRequest;
use OmieLib\Financas\Resumo\Response\ObterDetalhesLancamentoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaEmAbertoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaFinancasResponse;
use OmieLib\Financas\Resumo\Response\ObterResumoFinResponse;

/**
 * Lista de anexos do lançamento.
 *
 * @pw_element integer $nIdAnexo ID do anexo.<BR><BR>Gerado automático na inclusão.<BR>Informe esse campo para Obter, Consultar e Excluir o anexo.
 * @pw_element string $cCodIntAnexo Código de integração do anexo.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>Utilize esse campo para informar o código do anexo utilizado no seu aplicativo quando incluir o anexo no Omie. <BR>Assim, poderá utilizar esse campo para resgatar o anexo desejado.
 * @pw_element string $cNomeArquivo Nome do arquivo que foi adicionado.<BR>Preencha essa tag, apenas se você não tiver ou souber qual é o código de integração do anexo (tag cCodIntAnexo).<BR>Caso a tag cCodIntAnexo esteja preenchida, o conteúdo dessa tag será desconsiderado.
 * @pw_element string $cTipoArquivo Tipo de arquivo.
 * @pw_element string $cTabela Nome da tabela onde o anexo está incluído.<BR><BR>Pode ser: <BR>conta-pagar<BR>conta-receber
 * @pw_complex listaAnexos
 */
class ListaAnexos{
	/**
	 * ID do anexo.<BR><BR>Gerado automático na inclusão.<BR>Informe esse campo para Obter, Consultar e Excluir o anexo.
	 *
	 * @var integer
	 */
	public int $nIdAnexo;
	/**
	 * Código de integração do anexo.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>Utilize esse campo para informar o código do anexo utilizado no seu aplicativo quando incluir o anexo no Omie. <BR>Assim, poderá utilizar esse campo para resgatar o anexo desejado.
	 *
	 * @var string
	 */
	public string $cCodIntAnexo;
	/**
	 * Nome do arquivo que foi adicionado.<BR>Preencha essa tag, apenas se você não tiver ou souber qual é o código de integração do anexo (tag cCodIntAnexo).<BR>Caso a tag cCodIntAnexo esteja preenchida, o conteúdo dessa tag será desconsiderado.
	 *
	 * @var string
	 */
	public string $cNomeArquivo;
	/**
	 * Tipo de arquivo.
	 *
	 * @var string
	 */
	public string $cTipoArquivo;
	/**
	 * Nome da tabela onde o anexo está incluído.<BR><BR>Pode ser: <BR>conta-pagar<BR>conta-receber
	 *
	 * @var string
	 */
	public string $cTabela;
}
