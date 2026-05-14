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
 * Ajustes do item da NFe de recebimento
 *
 * @pw_element string $cNaoGerarFinanceiro Não deve gerar uma conta a pagar para o item da NFe de recebimento.<BR><BR>Valores possíveis: <BR>S - Sim<BR>N - Não
 * @pw_element string $cNaoGerarMovEstoque Não deve gerar movimento de estoque para o item da NFe de recebimento.<BR><BR>Valores possíveis: <BR>S - Sim<BR>N - Não
 * @pw_element decimal $nQtdeRecebida Quantidade recebida
 * @pw_element integer $codigo_local_estoque ID do local de estoque. <BR><BR>Preenchimento opcional.<BR><BR>Caso não preenchido assumirá o local de estoque padrão.
 * @pw_element string $cUnidade Unidade
 * @pw_element string $cCFOPEntrada CFOP de entrada.<BR><BR>Código Fiscal de Operações e Prestações.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>/api/v1/produtos/cfop/ para obter essa informação.
 * @pw_element itensSitTribEnt $itensSitTribEnt Situações Tributárias de Entrada do item
 * @pw_complex itensAjustes
 */
class ItensAjustes{
	/**
	 * Não deve gerar uma conta a pagar para o item da NFe de recebimento.<BR><BR>Valores possíveis: <BR>S - Sim<BR>N - Não
	 *
	 * @var string
	 */
	public string $cNaoGerarFinanceiro;
	/**
	 * Não deve gerar movimento de estoque para o item da NFe de recebimento.<BR><BR>Valores possíveis: <BR>S - Sim<BR>N - Não
	 *
	 * @var string
	 */
	public string $cNaoGerarMovEstoque;
	/**
	 * Quantidade recebida
	 *
	 * @var decimal
	 */
	public float $nQtdeRecebida;
	/**
	 * ID do local de estoque. <BR><BR>Preenchimento opcional.<BR><BR>Caso não preenchido assumirá o local de estoque padrão.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Unidade
	 *
	 * @var string
	 */
	public string $cUnidade;
	/**
	 * CFOP de entrada.<BR><BR>Código Fiscal de Operações e Prestações.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>/api/v1/produtos/cfop/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCFOPEntrada;
	/**
	 * Situações Tributárias de Entrada do item
	 *
	 * @var ItensSitTribEnt
	 */
	public ItensSitTribEnt $itensSitTribEnt;
}
