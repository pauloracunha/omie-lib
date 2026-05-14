<?php

namespace OmieLib\Produtos\Pedido\Response;

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
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Total_pedido;
use OmieLib\Produtos\Pedido\Trib_reg;
use OmieLib\Produtos\Pedido\Tributavel;

/**
 * Resposta da solicitação de simulação de impostos de um pedido de venda
 *
 * @pw_element integer $codigo_cliente Código do cliente.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.<BR>
 * @pw_element string $codigo_cliente_integracao Código Integração da Transportadora.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente (transportadora) via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag "codigo_cliente".<BR>
 * @pw_element string $consumidor_final Nota Fiscal para Consumo Final.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
 * @pw_element frete_simul $frete_simul Informações sobre o frete
 * @pw_element string $uf_entrega Estado onde ocorrerá a entrega do produto.<BR>Preenchimento Opcional.<BR><BR>Só preencher esse essa informação caso a entrega do produto não seja no mesmo endereço do cadastro do cliente.
 * @pw_element string $indPresenca Indicador de Presença da Operação.<BR>Preenchimento Opcional.<BR><BR>1 - Operação presencial.<BR>2 - Operação não presencial, pela Internet.<BR>3 - Operação não presencial, Teleatendimento.<BR>4 - NFC-e em operação com entrega a domicílio.<BR>5 - Operação presencial, fora do estabelecimento.<BR>9 - Operação não presencial, outros.<BR><BR><BR>Se não informado, utilizaremos automaticamente o "9 - Outros".<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR>
 * @pw_element det_simul_respArray $det_simul_resp Retorno com o detalhe do item com a simulação de impostos
 * @pw_complex pvpSimularImpResponse
 */
class PvpSimularImpResponse{
	/**
	 * Código do cliente.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.<BR>
	 *
	 * @var integer
	 */
	public int $codigo_cliente;
	/**
	 * Código Integração da Transportadora.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente (transportadora) via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag "codigo_cliente".<BR>
	 *
	 * @var string
	 */
	public string $codigo_cliente_integracao;
	/**
	 * Nota Fiscal para Consumo Final.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $consumidor_final;
	/**
	 * Informações sobre o frete
	 *
	 * @var Frete_simul
	 */
	public Frete_simul $frete_simul;
	/**
	 * Estado onde ocorrerá a entrega do produto.<BR>Preenchimento Opcional.<BR><BR>Só preencher esse essa informação caso a entrega do produto não seja no mesmo endereço do cadastro do cliente.
	 *
	 * @var string
	 */
	public string $uf_entrega;
	/**
	 * Indicador de Presença da Operação.<BR>Preenchimento Opcional.<BR><BR>1 - Operação presencial.<BR>2 - Operação não presencial, pela Internet.<BR>3 - Operação não presencial, Teleatendimento.<BR>4 - NFC-e em operação com entrega a domicílio.<BR>5 - Operação presencial, fora do estabelecimento.<BR>9 - Operação não presencial, outros.<BR><BR><BR>Se não informado, utilizaremos automaticamente o "9 - Outros".<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR>
	 *
	 * @var string
	 */
	public string $indPresenca;
	/**
	 * Retorno com o detalhe do item com a simulação de impostos
	 *
	 * @var Det_simul_resp[]
	 */
	public array $det_simul_resp;
}
