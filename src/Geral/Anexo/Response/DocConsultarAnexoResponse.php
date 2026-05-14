<?php

namespace OmieLib\Geral\Anexo\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Anexo\DocumentoAnexoJsonClient;
use OmieLib\Geral\Anexo\Info;
use OmieLib\Geral\Anexo\ListaAnexos;
use OmieLib\Geral\Anexo\Request\DocConsultarAnexoRequest;
use OmieLib\Geral\Anexo\Request\DocExcluirAnexoRequest;
use OmieLib\Geral\Anexo\Request\DocIncluirAnexoRequest;
use OmieLib\Geral\Anexo\Request\DocListarAnexosRequest;
use OmieLib\Geral\Anexo\Request\DocObterAnexoRequest;

/**
 * Resposta da solicitação de consulta de um anexo referente a um documento.
 *
 * @pw_element string $cCodIntAnexo Código de integração do anexo.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>Utilize esse campo para informar o código do anexo utilizado no seu aplicativo quando incluir o anexo no Omie. <BR>Assim, poderá utilizar esse campo para resgatar o anexo desejado.
 * @pw_element string $cTabela Nome da tabela onde o anexo está incluído.<BR><BR>Pode ser: <BR>cliente<BR>produto<BR>servico<BR>pedido-venda<BR>remessa-produto<BR>ordem-servico<BR>contrato-servico<BR>pedido-compra<BR>nota-entrada<BR>ordem-producao<BR>conta-pagar<BR>conta-receber<BR>conta-corrente<BR>conta-corrente-lancamento<BR>crm-contas<BR>crm-contatos<BR>crm-oportunidades<BR>com-recebimento
 * @pw_element integer $nId ID do documento de acordo com a tabela especificada.<BR><BR>Por exemplo:<BR>Caso você informe "cliente" na tag "cTabela" você deve informar o ID do cliente neste campo.<BR><BR>Preenchimento obrigatório.
 * @pw_element integer $nIdAnexo ID do anexo.<BR><BR>Gerado automático na inclusão.<BR>Informe esse campo para Obter, Consultar e Excluir o anexo.
 * @pw_element string $cNomeArquivo Nome do arquivo que foi adicionado.<BR>Preencha essa tag, apenas se você não tiver ou souber qual é o código de integração do anexo (tag cCodIntAnexo).<BR>Caso a tag cCodIntAnexo esteja preenchida, o conteúdo dessa tag será desconsiderado.
 * @pw_element string $cTipoArquivo Tipo de Arquivo.<BR><BR>Preenchimento Opcional.
 * @pw_element info $info Informações complementares do anexo.
 * @pw_complex docConsultarAnexoResponse
 */
class DocConsultarAnexoResponse{
	/**
	 * Código de integração do anexo.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>Utilize esse campo para informar o código do anexo utilizado no seu aplicativo quando incluir o anexo no Omie. <BR>Assim, poderá utilizar esse campo para resgatar o anexo desejado.
	 *
	 * @var string
	 */
	public string $cCodIntAnexo;
	/**
	 * Nome da tabela onde o anexo está incluído.<BR><BR>Pode ser: <BR>cliente<BR>produto<BR>servico<BR>pedido-venda<BR>remessa-produto<BR>ordem-servico<BR>contrato-servico<BR>pedido-compra<BR>nota-entrada<BR>ordem-producao<BR>conta-pagar<BR>conta-receber<BR>conta-corrente<BR>conta-corrente-lancamento<BR>crm-contas<BR>crm-contatos<BR>crm-oportunidades<BR>com-recebimento
	 *
	 * @var string
	 */
	public string $cTabela;
	/**
	 * ID do documento de acordo com a tabela especificada.<BR><BR>Por exemplo:<BR>Caso você informe "cliente" na tag "cTabela" você deve informar o ID do cliente neste campo.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $nId;
	/**
	 * ID do anexo.<BR><BR>Gerado automático na inclusão.<BR>Informe esse campo para Obter, Consultar e Excluir o anexo.
	 *
	 * @var integer
	 */
	public int $nIdAnexo;
	/**
	 * Nome do arquivo que foi adicionado.<BR>Preencha essa tag, apenas se você não tiver ou souber qual é o código de integração do anexo (tag cCodIntAnexo).<BR>Caso a tag cCodIntAnexo esteja preenchida, o conteúdo dessa tag será desconsiderado.
	 *
	 * @var string
	 */
	public string $cNomeArquivo;
	/**
	 * Tipo de Arquivo.<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $cTipoArquivo;
	/**
	 * Informações complementares do anexo.
	 *
	 * @var Info
	 */
	public Info $info;
}
