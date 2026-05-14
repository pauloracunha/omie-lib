<?php

namespace OmieLib\Produtos\Cupomfiscalconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcItensRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcListarRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcPagamentosRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcItensResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcListarResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcPagamentosResponse;

/**
 * Dados de Pagamentos do Cupom Fiscal.
 *
 * @pw_element integer $nIdCupom ID do Cupom Fiscal.
 * @pw_element string $cModeloCupom Modelo de Cupom Fiscal.<BR>Pode ser:<BR>00 - ECF<BR>59 - CFe-SAT<BR>65 - NFC-e
 * @pw_element integer $seqCaixa Número sequencial do Caixa.
 * @pw_element integer $seqCupom Numero sequencial do cupom.
 * @pw_element integer $nNumCupom Número do Cupom Fiscal.
 * @pw_element decimal $nValorCupom Valor do Cupom Fiscal.
 * @pw_element string $dDtEmissaoCupom Data de emissão do Cupom Fiscal.
 * @pw_element string $cHrEmisaoCupom Hora de emissão de Cupom Fiscal.
 * @pw_element string $cChaveCupom Chave do Cupom Fiscal.
 * @pw_element string $nSerieCupom Série do Cupom Fiscal
 * @pw_element string $cCupomCancelado Cupom Fiscal Cancelado (S/N)?
 * @pw_element string $cCupomDevolvido Cupom Fiscal Devolvido (S/N)?
 * @pw_element integer $seqItem Sequência do Item do Cupom Fiscal.
 * @pw_element string $cItemAgrupado Indica se o título foi gerado de forma agrupada ou individual.
 * @pw_element decimal $nValorItem Valor do Pagamento no item.
 * @pw_element string $dTransacao Data da transação da operação do cartão.
 * @pw_element string $hTransacao Hora da transação da operação do cartão.
 * @pw_element string $cTpIntegra Tipo de Integração do processo de pagamento.<BR><BR>Pode ser:<BR>1 = Pagamento integrado com o sistema de automação (TEF).<BR>2= Pagamento não integrado com o sistema de automação (POS).
 * @pw_element string $cIndPag Código da Forma de Pagamento.<BR><BR>Pode ser:<BR>0 = Pagamento à Vista <BR>1 = Pagamento à Prazo
 * @pw_element string $cMeioPag Código do Meio de pagamento utilizado.<BR><BR>Pode ser:<BR>01=Dinheiro<BR>02=Cheque<BR>03=Cartão de Crédito<BR>04=Cartão de Débito<BR>05=Crédito Loja<BR>10=Vale Alimentação<BR>11=Vale Refeição<BR>12=Vale Presente<BR>13=Vale Combustível<BR>15=Boleto Bancário<BR>16=Depósito Bancário<BR>17=Pagamento Instantâneo (PIX)<BR>18=Transferência bancária, Carteira Digital<BR>19=Programa de fidelidade, Cashback, Crédito Virtual<BR>90= Sem pagamento<BR>99=Outros
 * @pw_element string $cTpBandeira Código da Bandeira da operadora de cartão de crédito/débito.<BR><BR>Pode ser:<BR> 01=Visa<BR> 02=Mastercard<BR> 03=American Express<BR> 04=Sorocred<BR> 05=Diners Club<BR> 06=Elo<BR> 07=Hipercard<BR> 08=Aura<BR> 09=Cabal<BR> 99=Outros
 * @pw_element string $NSU Número do NSU (TEF/POS).
 * @pw_element string $NSUHost NSU (Número Sequencial Único) Identifica uma operação de venda no host.
 * @pw_element string $TID TID (Transaction ID) identifica uma transação realizada via e-commerce pelo adquirente / subadquirente.
 * @pw_element string $nNumAutorizacaoTEF Número de autorização do TEF.&nbsp;&nbsp;
 * @pw_element integer $nParcelaTEF Número de parcelas.
 * @pw_element string $cRedeTEF Nome da rede.
 * @pw_element decimal $nValorTEF Valor autorizado.
 * @pw_element string $cTipoCartaoTEF Tipo de Cartão utilizado (TEF).
 * @pw_element integer $nParcelaPOS Número de parcelas.
 * @pw_element string $cRedePOS Nome da rede.
 * @pw_element decimal $nValorPOS Valor autorizado.
 * @pw_element string $cCnpjAdquirente CNPJ da instituição de pagamente ou adquirente.
 * @pw_element string $cEstabelecimento Código do estabelecimento.
 * @pw_element integer $nCodTitulo Código do título.
 * @pw_element string $cBandeira Código da Bandeira.
 * @pw_element string $cCategoria Código da Categoria
 * @pw_element string $xCategoria Descrição da Categoria.
 * @pw_element integer $idContaCorrente Código da Conta Corrente.
 * @pw_element string $xContaCorrente Descrição da Conta Corrente.
 * @pw_element string $cTipoDoc Tipo de Documento.<BR><BR>Pode ser: <BR><BR>99999 - Outros<BR>BOL   - Boleto<BR>CHQ   - Cheque<BR>CHT   - Cheque de Terceiros<BR>CRC   - Cartão de Crédito<BR>CRD   - Cartão de Débito<BR>CRE   - Creadiário<BR>CRT   - Cartão <BR>DIN   - Dinheiro<BR>PIX   - Pix
 * @pw_element string $cNumParcela Número da parcela.
 * @pw_element decimal $nValorDocumento Valor do Documento.
 * @pw_element string $cNumeroDocumento Número do documento.
 * @pw_element string $cNumeroDocFiscal Número do Documento Fiscal.
 * @pw_element string $dDtEmissao Data de Emissão do Documento.
 * @pw_element string $dDtRegistro Filtrar os títulos pela data de emissão - até.
 * @pw_element string $dDtVencimento Data de Vencimento do Documento.
 * @pw_element string $dDtPrevisao Data de Previsão do Documento.
 * @pw_element string $dDtPagamento Data de Pagamento do Documento.
 * @pw_element string $dDtInclusao Data de Inclusão do Documento.
 * @pw_element string $dDtAlteracao Data de Alteração do Documento.
 * @pw_element string $cDRE Código no DRE.
 * @pw_element string $cBanco Código do Banco.
 * @pw_element integer $idCliente Código do cliente.
 * @pw_element string $cCpfCnpjCliente CPF/CNPJ do Cliente.
 * @pw_element string $cRazaoSocialCliente Razão Social do Cliente.
 * @pw_element string $cLiquidado Indica se o Título está Liquidado (S/N)?
 * @pw_element decimal $nValPago Valor pago do Título.
 * @pw_element decimal $nValAberto Valor em aberto do Título.
 * @pw_element string $cNossoNumero Identificação do pagamento no Cupom Fiscal.
 * @pw_complex pagamentos
 */
class Pagamentos{
	/**
	 * ID do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nIdCupom;
	/**
	 * Modelo de Cupom Fiscal.<BR>Pode ser:<BR>00 - ECF<BR>59 - CFe-SAT<BR>65 - NFC-e
	 *
	 * @var string
	 */
	public string $cModeloCupom;
	/**
	 * Número sequencial do Caixa.
	 *
	 * @var integer
	 */
	public int $seqCaixa;
	/**
	 * Numero sequencial do cupom.
	 *
	 * @var integer
	 */
	public int $seqCupom;
	/**
	 * Número do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nNumCupom;
	/**
	 * Valor do Cupom Fiscal.
	 *
	 * @var decimal
	 */
	public float $nValorCupom;
	/**
	 * Data de emissão do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $dDtEmissaoCupom;
	/**
	 * Hora de emissão de Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cHrEmisaoCupom;
	/**
	 * Chave do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cChaveCupom;
	/**
	 * Série do Cupom Fiscal
	 *
	 * @var string
	 */
	public string $nSerieCupom;
	/**
	 * Cupom Fiscal Cancelado (S/N)?
	 *
	 * @var string
	 */
	public string $cCupomCancelado;
	/**
	 * Cupom Fiscal Devolvido (S/N)?
	 *
	 * @var string
	 */
	public string $cCupomDevolvido;
	/**
	 * Sequência do Item do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $seqItem;
	/**
	 * Indica se o título foi gerado de forma agrupada ou individual.
	 *
	 * @var string
	 */
	public string $cItemAgrupado;
	/**
	 * Valor do Pagamento no item.
	 *
	 * @var decimal
	 */
	public float $nValorItem;
	/**
	 * Data da transação da operação do cartão.
	 *
	 * @var string
	 */
	public string $dTransacao;
	/**
	 * Hora da transação da operação do cartão.
	 *
	 * @var string
	 */
	public string $hTransacao;
	/**
	 * Tipo de Integração do processo de pagamento.<BR><BR>Pode ser:<BR>1 = Pagamento integrado com o sistema de automação (TEF).<BR>2= Pagamento não integrado com o sistema de automação (POS).
	 *
	 * @var string
	 */
	public string $cTpIntegra;
	/**
	 * Código da Forma de Pagamento.<BR><BR>Pode ser:<BR>0 = Pagamento à Vista <BR>1 = Pagamento à Prazo
	 *
	 * @var string
	 */
	public string $cIndPag;
	/**
	 * Código do Meio de pagamento utilizado.<BR><BR>Pode ser:<BR>01=Dinheiro<BR>02=Cheque<BR>03=Cartão de Crédito<BR>04=Cartão de Débito<BR>05=Crédito Loja<BR>10=Vale Alimentação<BR>11=Vale Refeição<BR>12=Vale Presente<BR>13=Vale Combustível<BR>15=Boleto Bancário<BR>16=Depósito Bancário<BR>17=Pagamento Instantâneo (PIX)<BR>18=Transferência bancária, Carteira Digital<BR>19=Programa de fidelidade, Cashback, Crédito Virtual<BR>90= Sem pagamento<BR>99=Outros
	 *
	 * @var string
	 */
	public string $cMeioPag;
	/**
	 * Código da Bandeira da operadora de cartão de crédito/débito.<BR><BR>Pode ser:<BR> 01=Visa<BR> 02=Mastercard<BR> 03=American Express<BR> 04=Sorocred<BR> 05=Diners Club<BR> 06=Elo<BR> 07=Hipercard<BR> 08=Aura<BR> 09=Cabal<BR> 99=Outros
	 *
	 * @var string
	 */
	public string $cTpBandeira;
	/**
	 * Número do NSU (TEF/POS).
	 *
	 * @var string
	 */
	public string $NSU;
	/**
	 * NSU (Número Sequencial Único) Identifica uma operação de venda no host.
	 *
	 * @var string
	 */
	public string $NSUHost;
	/**
	 * TID (Transaction ID) identifica uma transação realizada via e-commerce pelo adquirente / subadquirente.
	 *
	 * @var string
	 */
	public string $TID;
	/**
	 * Número de autorização do TEF.&nbsp;&nbsp;
	 *
	 * @var string
	 */
	public string $nNumAutorizacaoTEF;
	/**
	 * Número de parcelas.
	 *
	 * @var integer
	 */
	public int $nParcelaTEF;
	/**
	 * Nome da rede.
	 *
	 * @var string
	 */
	public string $cRedeTEF;
	/**
	 * Valor autorizado.
	 *
	 * @var decimal
	 */
	public float $nValorTEF;
	/**
	 * Tipo de Cartão utilizado (TEF).
	 *
	 * @var string
	 */
	public string $cTipoCartaoTEF;
	/**
	 * Número de parcelas.
	 *
	 * @var integer
	 */
	public int $nParcelaPOS;
	/**
	 * Nome da rede.
	 *
	 * @var string
	 */
	public string $cRedePOS;
	/**
	 * Valor autorizado.
	 *
	 * @var decimal
	 */
	public float $nValorPOS;
	/**
	 * CNPJ da instituição de pagamente ou adquirente.
	 *
	 * @var string
	 */
	public string $cCnpjAdquirente;
	/**
	 * Código do estabelecimento.
	 *
	 * @var string
	 */
	public string $cEstabelecimento;
	/**
	 * Código do título.
	 *
	 * @var integer
	 */
	public int $nCodTitulo;
	/**
	 * Código da Bandeira.
	 *
	 * @var string
	 */
	public string $cBandeira;
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $cCategoria;
	/**
	 * Descrição da Categoria.
	 *
	 * @var string
	 */
	public string $xCategoria;
	/**
	 * Código da Conta Corrente.
	 *
	 * @var integer
	 */
	public int $idContaCorrente;
	/**
	 * Descrição da Conta Corrente.
	 *
	 * @var string
	 */
	public string $xContaCorrente;
	/**
	 * Tipo de Documento.<BR><BR>Pode ser: <BR><BR>99999 - Outros<BR>BOL   - Boleto<BR>CHQ   - Cheque<BR>CHT   - Cheque de Terceiros<BR>CRC   - Cartão de Crédito<BR>CRD   - Cartão de Débito<BR>CRE   - Creadiário<BR>CRT   - Cartão <BR>DIN   - Dinheiro<BR>PIX   - Pix
	 *
	 * @var string
	 */
	public string $cTipoDoc;
	/**
	 * Número da parcela.
	 *
	 * @var string
	 */
	public string $cNumParcela;
	/**
	 * Valor do Documento.
	 *
	 * @var decimal
	 */
	public float $nValorDocumento;
	/**
	 * Número do documento.
	 *
	 * @var string
	 */
	public string $cNumeroDocumento;
	/**
	 * Número do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $cNumeroDocFiscal;
	/**
	 * Data de Emissão do Documento.
	 *
	 * @var string
	 */
	public string $dDtEmissao;
	/**
	 * Filtrar os títulos pela data de emissão - até.
	 *
	 * @var string
	 */
	public string $dDtRegistro;
	/**
	 * Data de Vencimento do Documento.
	 *
	 * @var string
	 */
	public string $dDtVencimento;
	/**
	 * Data de Previsão do Documento.
	 *
	 * @var string
	 */
	public string $dDtPrevisao;
	/**
	 * Data de Pagamento do Documento.
	 *
	 * @var string
	 */
	public string $dDtPagamento;
	/**
	 * Data de Inclusão do Documento.
	 *
	 * @var string
	 */
	public string $dDtInclusao;
	/**
	 * Data de Alteração do Documento.
	 *
	 * @var string
	 */
	public string $dDtAlteracao;
	/**
	 * Código no DRE.
	 *
	 * @var string
	 */
	public string $cDRE;
	/**
	 * Código do Banco.
	 *
	 * @var string
	 */
	public string $cBanco;
	/**
	 * Código do cliente.
	 *
	 * @var integer
	 */
	public int $idCliente;
	/**
	 * CPF/CNPJ do Cliente.
	 *
	 * @var string
	 */
	public string $cCpfCnpjCliente;
	/**
	 * Razão Social do Cliente.
	 *
	 * @var string
	 */
	public string $cRazaoSocialCliente;
	/**
	 * Indica se o Título está Liquidado (S/N)?
	 *
	 * @var string
	 */
	public string $cLiquidado;
	/**
	 * Valor pago do Título.
	 *
	 * @var decimal
	 */
	public float $nValPago;
	/**
	 * Valor em aberto do Título.
	 *
	 * @var decimal
	 */
	public float $nValAberto;
	/**
	 * Identificação do pagamento no Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cNossoNumero;
}
