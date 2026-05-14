<?php

namespace OmieLib\Produtos\Pedido\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Agropecuario;
use OmieLib\Produtos\Pedido\Cabecalho;
use OmieLib\Produtos\Pedido\Cbs;
use OmieLib\Produtos\Pedido\Cliente_simul;
use OmieLib\Produtos\Pedido\Cofins_padrao;
use OmieLib\Produtos\Pedido\Cofins_st;
use OmieLib\Produtos\Pedido\Combustivel;
use OmieLib\Produtos\Pedido\Csll;
use OmieLib\Produtos\Pedido\Departamentos;
use OmieLib\Produtos\Pedido\Det;
use OmieLib\Produtos\Pedido\Det_simul;
use OmieLib\Produtos\Pedido\Det_simul_resp;
use OmieLib\Produtos\Pedido\Exportacao;
use OmieLib\Produtos\Pedido\Frete;
use OmieLib\Produtos\Pedido\Frete_simul;
use OmieLib\Produtos\Pedido\Ibs;
use OmieLib\Produtos\Pedido\Ibs_cbs;
use OmieLib\Produtos\Pedido\Icms;
use OmieLib\Produtos\Pedido\Icms_efet;
use OmieLib\Produtos\Pedido\Icms_ie;
use OmieLib\Produtos\Pedido\Icms_retido;
use OmieLib\Produtos\Pedido\Icms_sn;
use OmieLib\Produtos\Pedido\Icms_st;
use OmieLib\Produtos\Pedido\Ide;
use OmieLib\Produtos\Pedido\Imposto;
use OmieLib\Produtos\Pedido\Inf_adic;
use OmieLib\Produtos\Pedido\InfoCadastro;
use OmieLib\Produtos\Pedido\Informacoes_adicionais;
use OmieLib\Produtos\Pedido\Inss;
use OmieLib\Produtos\Pedido\Ipi;
use OmieLib\Produtos\Pedido\Irrf;
use OmieLib\Produtos\Pedido\Iss;
use OmieLib\Produtos\Pedido\Itens;
use OmieLib\Produtos\Pedido\Lancamentos;
use OmieLib\Produtos\Pedido\ListaNfe;
use OmieLib\Produtos\Pedido\Lista_parcelas;
use OmieLib\Produtos\Pedido\Lote_validade;
use OmieLib\Produtos\Pedido\Market_place;
use OmieLib\Produtos\Pedido\Mensagens;
use OmieLib\Produtos\Pedido\NfRelacionada;
use OmieLib\Produtos\Pedido\NrCupomFiscal;
use OmieLib\Produtos\Pedido\NrModelo1_1A;
use OmieLib\Produtos\Pedido\NrNF;
use OmieLib\Produtos\Pedido\NrProdutorRural;
use OmieLib\Produtos\Pedido\Observacao;
use OmieLib\Produtos\Pedido\Observacoes;
use OmieLib\Produtos\Pedido\Outros_detalhes;
use OmieLib\Produtos\Pedido\Parcela;
use OmieLib\Produtos\Pedido\PedidoVendaProdutoJsonClient;
use OmieLib\Produtos\Pedido\Pedido_venda_produto;
use OmieLib\Produtos\Pedido\Pedido_venda_produto_response;
use OmieLib\Produtos\Pedido\Pis_padrao;
use OmieLib\Produtos\Pedido\Pis_st;
use OmieLib\Produtos\Pedido\Produto;
use OmieLib\Produtos\Pedido\Produto_simul;
use OmieLib\Produtos\Pedido\Produto_simul_resp;
use OmieLib\Produtos\Pedido\Rastreabilidade;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;
use OmieLib\Produtos\Pedido\Total_pedido;
use OmieLib\Produtos\Pedido\Trib_reg;
use OmieLib\Produtos\Pedido\Tributavel;

/**
 * Solicitação de devolução de pedido de venda.
 *
 * @pw_element integer $codigo_pedido ID do pedido do venda.<BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $codigo_pedido_integracao Código de integração do pedido de venda.<BR>Preenchimento Obrigatório na inclusão/alteração.<BR>Preenchimento Opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do pedido no aplicativo que você está integração com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de pedidos você conseguirá ver a relação entre o id do pedido gerado no Omie e o código de pedido existente em sua aplicação.<BR><BR>
 * @pw_element itens $itens Informações dos itens que serão devolvidos.<BR><BR>Caso essa tag não seja preenchida será realizado a devolução integral de todos os itens do pedido.<BR><BR>Preenchimento opcional.
 * @pw_complex pvpDevolverRequest
 */
class PvpDevolverRequest{
	/**
	 * ID do pedido do venda.<BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $codigo_pedido;
	/**
	 * Código de integração do pedido de venda.<BR>Preenchimento Obrigatório na inclusão/alteração.<BR>Preenchimento Opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do pedido no aplicativo que você está integração com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de pedidos você conseguirá ver a relação entre o id do pedido gerado no Omie e o código de pedido existente em sua aplicação.<BR><BR>
	 *
	 * @var string
	 */
	public string $codigo_pedido_integracao;
	/**
	 * Informações dos itens que serão devolvidos.<BR><BR>Caso essa tag não seja preenchida será realizado a devolução integral de todos os itens do pedido.<BR><BR>Preenchimento opcional.
	 *
	 * @var Itens
	 */
	public Itens $itens;
}
