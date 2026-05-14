<?php

namespace OmieLib\Produtos\Recebimentonfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;

/**
 * Cabeçalho da NFe de recebimento
 *
 * @pw_element integer $nIdReceb ID do Recebimento<BR><BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela é uma informação interna, utilizada apenas nas APIs.
 * @pw_element integer $nIdFornecedor Id do fornecedor.<BR><BR>Preenchimento obrigatório.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>/api/v1/geral/clientes/ para obter essa informação.
 * @pw_element string $cPessoaFisica Indica se o fornecedor é pessoa física. <BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
 * @pw_element string $cNome Nome do fornecedor
 * @pw_element string $cRazaoSocial Razão social do fornecedor
 * @pw_element string $cInscricao Inscrição estadual do fornecedor
 * @pw_element string $cCNPJ_CPF CNPJ ou CPF do fornecedor
 * @pw_element string $cChaveNfe Chave da NFe
 * @pw_element string $cEtapa Etapa da NFe<BR><BR>Preenchimento Obrigatório.<BR><BR>Esse campo indica em que coluna o recebimento da NFe irá figurar no processo de recebimento do Omie.
 * @pw_element string $cNumeroNFe Número da NFe
 * @pw_element string $cSerieNFe Série da NFe
 * @pw_element string $cModeloNFe Modelo da NFe
 * @pw_element string $dEmissaoNFe Data de emissão da NFe
 * @pw_element decimal $nValorNFe Valot Total da Nota Fiscal
 * @pw_element string $cAmbienteNFe Ambiente da NFe <BR><BR>Pode ser: <BR>P = Produção<BR>H = Homologação
 * @pw_element string $cNaturezaOperacao Natureza da operação da NFe
 * @pw_complex cabec
 */
class Cabec{
	/**
	 * ID do Recebimento<BR><BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela é uma informação interna, utilizada apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nIdReceb;
	/**
	 * Id do fornecedor.<BR><BR>Preenchimento obrigatório.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>/api/v1/geral/clientes/ para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nIdFornecedor;
	/**
	 * Indica se o fornecedor é pessoa física. <BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cPessoaFisica;
	/**
	 * Nome do fornecedor
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * Razão social do fornecedor
	 *
	 * @var string
	 */
	public string $cRazaoSocial;
	/**
	 * Inscrição estadual do fornecedor
	 *
	 * @var string
	 */
	public string $cInscricao;
	/**
	 * CNPJ ou CPF do fornecedor
	 *
	 * @var string
	 */
	public string $cCNPJ_CPF;
	/**
	 * Chave da NFe
	 *
	 * @var string
	 */
	public string $cChaveNfe;
	/**
	 * Etapa da NFe<BR><BR>Preenchimento Obrigatório.<BR><BR>Esse campo indica em que coluna o recebimento da NFe irá figurar no processo de recebimento do Omie.
	 *
	 * @var string
	 */
	public string $cEtapa;
	/**
	 * Número da NFe
	 *
	 * @var string
	 */
	public string $cNumeroNFe;
	/**
	 * Série da NFe
	 *
	 * @var string
	 */
	public string $cSerieNFe;
	/**
	 * Modelo da NFe
	 *
	 * @var string
	 */
	public string $cModeloNFe;
	/**
	 * Data de emissão da NFe
	 *
	 * @var string
	 */
	public string $dEmissaoNFe;
	/**
	 * Valot Total da Nota Fiscal
	 *
	 * @var decimal
	 */
	public float $nValorNFe;
	/**
	 * Ambiente da NFe <BR><BR>Pode ser: <BR>P = Produção<BR>H = Homologação
	 *
	 * @var string
	 */
	public string $cAmbienteNFe;
	/**
	 * Natureza da operação da NFe
	 *
	 * @var string
	 */
	public string $cNaturezaOperacao;
}
