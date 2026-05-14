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
 * Informações adicionais da NFe de recebimento
 *
 * @pw_element string $cCategCompra Código da categoria da compra.<BR><BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do recebimento de NFe.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>/api/v1/geral/categorias/ para obter essa informação.
 * @pw_element integer $nIdConta Id da conta corrente.<BR><BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do recebimento de NFe.<BR><BR>Utilize a tag "codigo" do método "PesquisarContaCorrente" da API<BR>/api/v1/geral/contacorrente/ para obter essa informação.
 * @pw_element string $dRegistro Data de registro.<BR><BR>Preenchimento obrigatório.
 * @pw_element integer $nIdComprador Id do comprador.<BR><BR>Preenchimento Opcional.
 * @pw_element integer $nIdProjeto Id do projeto<BR><BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Recebimento de NFe.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>/api/v1/geral/projetos/ para obter essa informação.
 * @pw_complex infoAdicionais
 */
class InfoAdicionais{
	/**
	 * Código da categoria da compra.<BR><BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do recebimento de NFe.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>/api/v1/geral/categorias/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCategCompra;
	/**
	 * Id da conta corrente.<BR><BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do recebimento de NFe.<BR><BR>Utilize a tag "codigo" do método "PesquisarContaCorrente" da API<BR>/api/v1/geral/contacorrente/ para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nIdConta;
	/**
	 * Data de registro.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $dRegistro;
	/**
	 * Id do comprador.<BR><BR>Preenchimento Opcional.
	 *
	 * @var integer
	 */
	public int $nIdComprador;
	/**
	 * Id do projeto<BR><BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Recebimento de NFe.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>/api/v1/geral/projetos/ para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nIdProjeto;
}
